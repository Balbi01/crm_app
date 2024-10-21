<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\User\UserService;

class UserController extends Controller
{
    /** @var UserService */
    protected $userService;

    /** @var Request */
    protected $request;

    /**
     * Método constructor de la clase
     */
    public function __construct(
        UserService $userServiceInstance,
        Request $requestInstance
    ) {
        // Inyección de dependencias
        $this->userService = $userServiceInstance;
        $this->request = $requestInstance;
    }

    public function index()
    {
        $response = $this->userService->index();

        return $response->toArray();
    }

    public function createUser()
    {
        $userData = $this->request->all();
        return $this->userService->createUser($userData);
    }
    
}
