<?php

namespace App\Providers;

use App\Models\Allclass;
use App\Models\Map;
use App\Models\BackImage;
use App\Models\CompanyProfile;
use App\Models\School;
use App\Models\Section;
use Illuminate\Support\ServiceProvider;

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
        view()->share('content', CompanyProfile::first());
        view()->share('school', School::get());
        view()->share('section', Section::get());
        view()->share('allclass', Allclass::get());
    }
}
