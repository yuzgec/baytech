<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Features;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {

        $Pages = Cache::remember('pages',now()->addYear(1), function () {
            return Page::with('getCategory')->get();
        });

        $Service = Cache::remember('service',now()->addYear(1), function () {
            return Service::all();
        });

        $Blog = Cache::remember('blog',now()->addYear(1), function () {
            return Blog::all();
        });

        $Reference = Cache::remember('reference',now()->addYear(1), function () {
            return Service::where('id', 11)->first();
        });

        View::share([
            'Pages' => $Pages,
            'Service' => $Service,
            'Blog' => $Blog,
            'Reference' => $Reference
        ]);
    }
}
