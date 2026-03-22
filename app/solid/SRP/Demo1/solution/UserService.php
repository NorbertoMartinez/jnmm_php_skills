<?php

namespace App\solid\SRP\Demo1\solution;

use App\solid\SRP\Demo1\Exception;
use App\solid\SRP\Demo1\PDO;
use App\solid\SRP\Demo1\solution\EmailService;
use App\solid\SRP\Demo1\solution\UserRepository;
use App\solid\SRP\Demo1\solution\UserRequest;

class UserService {

    protected $repository=null;
    protected $emailService=null;
    protected $request=null;



    public function __construct()
    {
        if(!$this->repository)
            $this->repository = new UserRepository();

        if(!$this->emailService)
            $this->emailService = new EmailService();

        if(!$this->request)
            $this->request = new UserRequest();
    }

    public function createUser(string $name, string $email, $password)
    {
        if(!$this->request->validateEmail($email))
            throw new \Exception("Error");

        $user = new User();

        $user->setName($name);
        $user->setName($email);
        $user->setName($password);
        // ...

        /**
         * Persisntence Responsability
         */
        $this->repository->save($user);


        /**
         * Communication Responsability
         */
        $this->emailService->sendWelcomeEmail($user);
    }


}