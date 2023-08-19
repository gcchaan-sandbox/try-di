<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

interface PrinterInterface
{
    public function __invoke(string $user): void;
}
