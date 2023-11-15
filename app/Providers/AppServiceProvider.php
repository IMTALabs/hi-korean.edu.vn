<?php

namespace App\Providers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        SEOMeta::setTitle('Hi Korean');
        SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
        SEOMeta::setCanonical(url()->current());

        OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
        OpenGraph::setTitle('Hi Korean');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage(asset('assets/images/banner/banner.png'));

        JsonLd::setTitle('Hi Korean');
        JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
        JsonLd::addImage(asset('assets/images/banner/banner.png'));
    }
}
