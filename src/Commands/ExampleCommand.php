<?php

namespace Bappy3a\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'my-test-command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment(config('package.command_output'));

        return self::SUCCESS;
    }
}
