<?php


use App\patterns\facade\Demo1\situation\LoginLogger;
use App\patterns\facade\Demo1\situation\PasswordValidator;
use App\patterns\facade\Demo1\situation\TokenService;
use App\patterns\facade\Demo1\situation\UserRepository;

$userRepo = new UserRepository();
$validator = new PasswordValidator();
$tokenService = new TokenService();
$logger = new LoginLogger();

$user = $userRepo->findByEmail("test@mail.com");

if($validator->verify("123456",$user['password'])){
    $token = $tokenService->generate();
    $logger->log($user['email']);
}