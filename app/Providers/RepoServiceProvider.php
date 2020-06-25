<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            'ICategoriesRepository' => 'CategoriesRepository',
        ];

        foreach ($repositories as $key => $value) {
            $this->app->bind(
                "App\Http\Repositories\\$key",
                "App\Http\Repositories\\$value"
            );
        }

        $services = [
            'ICategoriesService' => 'CategoriesService',
        ];

        foreach ($services as $key => $value) {
            $this->app->bind(
                "App\Http\Services\\$key",
                "App\Http\Services\\$value"
            );
        }
    }
}
