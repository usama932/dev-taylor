<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menuitem;
use App\Models\Company;
use App\Models\Location;
use App\Services\WidgetsService;
use App\Services\KnowledgeService;
use Illuminate\Support\Facades\View;
use App\Services\WhatwedoService;
use App\Services\CasestudyService;

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
        //Menu data
        $menus = Menuitem::with('menu')->get();
        $topMenu = $menus->filter(function($item) {

            return $item->menu->name === 'Top menu';

        })->all();
        $leftMenu = $menus->filter(function($item) {

            return $item->menu->name === 'Left menu';

        })->all();
        $footerMenu = $menus->filter(function($item) {

            return $item->menu->name === 'Footer menu';

        })->all();

        $setting['company'] = Company::first();
        $setting['location'] = Location::orderBy('orderby')->get();

        View::share('TopMenu', $topMenu);
        View::share('FooterMenu', $footerMenu);
        View::share('LeftMenu', $leftMenu);
        View::share('SiteSettings', $setting);
        View::share('WidgetsService', new WidgetsService);
        View::share('KnowledgeService', new KnowledgeService);
        View::share('WhatwedoService', new WhatwedoService);
        View::share('CasestudyService', new CasestudyService);
    }
}
