<?php

namespace TomatoPHP\TomatoArtisan;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoAdmin\Facade\TomatoMenu;
use TomatoPHP\TomatoArtisan\Menus\ArtisanMenu;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;


class TomatoArtisanServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoArtisan\Console\TomatoArtisanInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-artisan.php', 'tomato-artisan');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-artisan.php' => config_path('tomato-artisan.php'),
        ], 'tomato-artisan-config');

        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-artisan');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-artisan'),
        ], 'tomato-artisan-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-artisan');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => app_path('lang/vendor/tomato-artisan'),
        ], 'tomato-artisan-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        TomatoMenu::register([
            Menu::make()
                ->group(trans('tomato-artisan::global.group'))
                ->label(trans('tomato-artisan::global.title'))
                ->icon("bx bxs-terminal")
                ->route("admin.artisan.index"),
        ]);
    }
}
