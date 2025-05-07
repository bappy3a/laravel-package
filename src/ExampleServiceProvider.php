<?php

namespace Bappy3a\Example;

<<<<<<< HEAD
use Bappy3a\Example\Commands\ExampleCommand;
=======
use Bappy3a\Example\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
>>>>>>> 0b04b50 (appointments hide in tracking)
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered(){
        Route::macro('laravelPackage',function (string $baseUrl = 'laravel-package'){
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class,'index']);
            });
        });

        //in this product use
        //Route::laravelPackage();
        //Route::laravelPackage('bappy3a');
    }
}
