<?php

declare(strict_types=1);

namespace App\Domain\Hotel\Service;

use App\Domain\Booking\Collection\BookingList;
use App\Domain\Booking\Contracts\BookingProviderInterface;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Hotel\Contract\HotelSearcherInterface;

class FindBookingsByHotel implements HotelSearcherInterface
{
    /**
     * @var BookingProviderInterface[]|array
     */
    private $providers;

    /**
     * FindBookingsByHotel constructor.
     * @param array|BookingProviderInterface[] $providers
     */
    public function __construct(array $providers)
    {
        $this->providers = $providers;
    }

    public function find(BookingRequest $bookingRequest): BookingList
    {
        $bookings = [];
        foreach($this->providers as $provider) {
            $bookings[] = $provider->find($bookingRequest);
        }

        return BookingList::build($bookings);
    }
}
