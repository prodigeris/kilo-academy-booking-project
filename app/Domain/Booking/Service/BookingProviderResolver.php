<?php

declare(strict_types=1);

namespace App\Domain\Booking\Service;


use App\Components\Agoda\Adapter\AgodaAdapter;
use App\Domain\Booking\Contracts\BookingProviderInterface;
use App\Models\User;

class BookingProviderResolver
{B
    /**
     * @return array|BookingProviderInterface[]
     */
    public function resolve(User $user): array
    {
        if($user->isFromSpain()) {
            return [AgodaAdapter::class];
        }
    }
}
