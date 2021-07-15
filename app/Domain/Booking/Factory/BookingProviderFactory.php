<?php

declare(strict_types=1);

namespace App\Domain\Booking\Factory;


use App\Domain\Booking\Contracts\BookingProviderInterface;

class BookingProviderFactory
{
    private array $providers;

    public function __construct(array $providers)
    {
//        $providers = ['bookingCom' => ];
        $this->providers = $providers;
    }

    public function build(string $provider): BookingProviderInterface
    {
        if(! array_key_exists($provider)) {
            throw new \InvalidArgumentException('Invalid provider. Its not registered');
        }

        //
    }
}
