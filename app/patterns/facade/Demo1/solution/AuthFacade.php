<?php

namespace App\patterns\facade\Demo1\solution;

use App\patterns\facade\Demo1\solution\LoginLogger;
use App\patterns\facade\Demo1\solution\PasswordValidator;
use App\patterns\facade\Demo1\solution\TokenService;
use App\patterns\facade\Demo1\solution\UserRepository;
use App\solid\SRP\Demo1\solution\User;

class AuthFacade
{

    private ?LoginLogger $loginLogger;

    private ?PasswordValidator $passwordValidator;

    private ?TokenService $tokenService;

    private ?UserRepository $userRepository;


    public function __construct()
    {
        $this->loginLogger = new LoginLogger();
        $this->passwordValidator = new PasswordValidator();
        $this->tokenService = new TokenService();
        $this->userRepository = new UserRepository();
    }

    /**
     * @param string $email
     * @param string $password
     * @return string|null
     */
    public function login(string $email, string $password): string | null
    {
        $user = $this->userRepository->findByEmail($email);

        if(!$user)
            return null;

        if(!$this->passwordValidator->verify($password, $user['password']))
            return null;

        $token = $this->tokenService->generate();
        $this->loginLogger->log($user['email']);

        return $token;

    }
}