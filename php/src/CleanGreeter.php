<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

class CleanGreeter implements GreeterInterface
{
    public function __construct(
        private readonly Users $users,
        private readonly PrinterInterface $printer
    ) {}

    public function sayHello(): void
    {
        foreach ($this->users as $user) {
            ($this->printer)($user);
        }
    }
}