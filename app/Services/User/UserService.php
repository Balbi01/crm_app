<?php

namespace App\Services\User;

use App\Models\User;
use App\Repositories\User\UserRepository;

/**
 * Clase servicio de Usuarios
 * Contiene toda la lógica de negocio relacionada a Usuarios.
 */
class UserService
{
    /** @var UserRepository */
    protected $userRepository;

    /** @var User */
    protected $user;

    /**
     * Método constructor de la clase
     */
    public function __construct(
        UserRepository $userRepositoryInstance,
        User $userInstance
    )
    {
        // Inyección de dependencias
        $this->userRepository = $userRepositoryInstance;
        $this->user = $userInstance;
    }

    public function index()
    {
        return $this->userRepository->index();
    }

    public function createUser($userData)
    {
        $validatedData = $this->validateUserData($userData);
        $passwordEquals = $this->validatePasswordEquality(
            $userData['password'],
            $userData['password_confirmation']
        );

        if (!$passwordEquals) {
            return [
                'status' => 'error',
                'message' => 'Las contraseñas no coinciden.'
            ];
        }

        if ($validatedData['status'] === 'error') {
            return $validatedData;
        }

        $user = new $this->user;

        $user->name = $userData['name'];
        $user->last_name = $userData['last_name'];
        $user->mother_last_name = $userData['mother_last_name'];
        $user->email = $userData['email'];
        $user->password = bcrypt($userData['password']);
        
        return $this->userRepository->saveUser($user);
    }

    /**
     * Método encargado de validar los datos de un usuario
     * para su guardado
     * @param array $userData
     */
    public function validateUserData($userData) : array
    {
        $response = [
            'status' => 'success',
            'message' => 'Datos validados.'
        ];

        if (!isset($userData['name'])) {
            $response = [
                'status' => 'error',
                'message' => 'El campo nombre es requerido.'
            ];
        }
        if (!isset($userData['last_name'])) {
            $response = [
                'status' => 'error',
                'message' => 'El campo apellido paterno es requerido.'
            ];
        }
        if (!isset($userData['password']) || !isset($userData['password_confirmation'])) {
            $response = [
                'status' => 'error',
                'message' => 'El campo contraseña es requerido.'
            ];
        }
        if (!isset($userData['email'])) {
            $response = [
                'status' => 'error',
                'message' => 'El campo correo electrónico es requerido.'
            ];
        }

        return $response;
    }

    public function validatePasswordEquality($password, $passwordConfirmation)
    {
        return $password === $passwordConfirmation;
    }
}
