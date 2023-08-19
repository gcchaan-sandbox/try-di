<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

class Printer implements PrinterInterface
{
    public function __invoke(string $user): void
    {
        echo 'Hello ' . $user . '!' . PHP_EOL;
    }
}
