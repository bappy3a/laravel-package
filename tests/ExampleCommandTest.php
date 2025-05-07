<?php


use Bappy3a\Example\Commands\ExampleCommand;

it('can output configured value', function () {
    \Pest\Laravel\artisan(ExampleCommand::class)
        ->expectsOutput(config('package.command_output'))
        ->assertExitCode(0);
});
