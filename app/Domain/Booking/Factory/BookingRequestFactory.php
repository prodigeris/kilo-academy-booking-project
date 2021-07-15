<?php

declare(strict_types=1);

namespace App\Domain\Booking\Factory;

use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Hotel\Model\Hotel;

class BookingRequestFactory
{
    public function build(\DateTime $from, int $nights, Hotel $hotel): BookingRequest
    {
        return new BookingRequest($from, $nights, $hotel);
    }
}
