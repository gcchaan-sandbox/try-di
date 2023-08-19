<?php

use Ray\Di\Injector;
use GcchaanSandbox\TryDi\AppModule;
use GcchaanSandbox\TryDi\TestModule;
use GcchaanSandbox\TryDi\GreeterInterface;

require dirname(__DIR__) . '/vendor/autoload.php';

$module = new AppModule();
$module->override(new TestModule());
$injector = new Injector($module);
$greeter = $injector->getInstance(GreeterInterface::class);
$greeter->sayHello();
