<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

use Ray\Di\AbstractModule;

class SpanishModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind()->annotatedWith(Message::class)->toInstance('¡Hola %s!' . PHP_EOL);
    }
}