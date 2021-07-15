<?php

namespace App\Providers;

use App\Components\Agoda\Adapter\AgodaAdapter;
use App\Components\BookingCom\Adapter\BookingComAdapter;
use App\Components\BookingCom\Fake\FakeBookingCom;
use App\Components\HotelsCom\Adapter\HotelsComAdapter;
use App\Domain\Hotel\Service\FindBookingsByHotel;
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

        if($this->app->environment('local')) {
            $this->app->bind(BookingComAdapter::class, FakeBookingCom::class);
        }

        $this->app->when(
            FindBookingsByHotel::class
        )->needs('$providers')
        ->give(static fn() => [
        $this->app->make(BookingComAdapter::class),
        $this->app->make(AgodaAdapter::class),
        $this->app->make(HotelsComAdapter::class),
    ]);


    }
}
