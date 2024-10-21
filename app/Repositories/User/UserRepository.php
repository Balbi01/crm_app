<?php

namespace App\Repositories\User;

use App\Models\User;

/**
 * Clase Repositorio de Usuarios
 */
class UserRepository
{
    /** @var User */
    protected $userModel;

    /**
     * Método constructor de la clase.
     */
    public function __construct(
        User $userModelInstance
    )
    {
        // Inyección de dependencias
        $this->userModel = $userModelInstance;
    }

    public function index()
    {
        return $this->userModel->all();
    }

    public function saveUser(User $user)
    {
        try {
            $user->save();

            return [
                'status' => 'success',
                'message' => 'Usuario creado satisfactoriamente.'
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Error al crear el usuario.' . $e->getMessage()
            ];
        }
    }
}
