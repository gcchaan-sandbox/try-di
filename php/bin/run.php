<?php
use GcchaanSandbox\TryDi\Greeter;

require dirname(__DIR__) . '/vendor/autoload.php';

(new Greeter)->sayHello();
