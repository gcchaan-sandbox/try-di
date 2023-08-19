<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind(Users::class)->toInstance(new Users(['DI', 'AOP', 'REST']));
        $this->bind(PrinterInterface::class)->to(IntlPrinter::class);
        $this->bind(GreeterInterface::class)->to(CleanGreeter::class);
    }
}