<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

use Ray\Di\Di\Named;

class IntlPrinter implements PrinterInterface
{
    public function __construct(
        #[Message] private string $message
    ){}

    public function __invoke(string $user): void
    {
        printf($this->message, $user);
    }
}