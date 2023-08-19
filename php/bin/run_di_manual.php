<?php

use GcchaanSandbox\TryDi\CleanGreeter;
use GcchaanSandbox\TryDi\Printer;
use GcchaanSandbox\TryDi\Users;

require dirname(__DIR__) . '/vendor/autoload.php';

$greeter = new CleanGreeter(
    new Users(['DI', 'AOP', 'REST']),
    new Printer
);

$greeter->sayHello();