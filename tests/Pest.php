<?php

use Bappy3a\Example\Tests\TestCase;
use Illuminate\Support\Facades\Route;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::laravelPackage();
    })
    ->in(__DIR__);
