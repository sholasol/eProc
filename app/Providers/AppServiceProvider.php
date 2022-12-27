<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Builder::macro('search', function($field, $string){
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });

        Builder::macro('condWhere', function($field, $string){
            if ($string=="") {
                return $string ? $this->where($field, '!=', null) : $this;
            }
            return $string ? $this->where($field, '=', $string) : $this;
        });
    }
}
