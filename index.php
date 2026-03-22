<?php


# use App\solid\SRP\Demo1\situation\UserManager as SLPUserManager;
# use App\solid\SRP\Demo1\solution\UserService as SLPUserService;


# use App\solid\OCP\Demo1\solution\PaymentProcessor;
# use App\solid\OCP\Demo1\solution\PaymentMethods\CardPayment;
# use App\solid\OCP\Demo1\solution\PaymentMethods\PaypalPayment;


require_once __DIR__ . "/vendor/autoload.php";



/**
 * S.O.L.I.D.
 */

/**
 * 1. S: Single Responsability Principle
 * Demo 1
 */
### Situation:
# $userManager = new SLPUserManager();
# $userManager->createUser("nameExample", "email@example.io", "1234545");

### Solution:
# $userService = new SLPUserService();
# $userService->createUser("nameExample", "email@example.io", "1234545");


/**
 * 2. O: Open Close Principle
 * Demos
 */
## situation
# $payment = new PaymentProcessor();
# echo $payment->pay('card', 100);
# echo $payment->pay('paypal', 200);

## solution
#
# $processor = new PaymentProcessor();
#
# $processor->pay(new CardPayment(), "100");
# $processor->pay(new PaypalPayment(), "200");