<?php
declare(strict_types=1);

namespace GcchaanSandbox\TryDi;

use Ray\Di\AbstractModule;

final class TestModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind()->annotatedWith(Message::class)->toInstance('Hello %s!' . PHP_EOL);
        $this->bind(Users::class)->toInstance(new Users(['TEST1', 'TEST2']));
    }
}
