<?php

declare(strict_types=1);

namespace App\Domain\Hotel\Contract;

use App\Domain\Booking\Collection\BookingList;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Hotel\Model\Hotel;

interface HotelSearcherInterface
{
    public function find(BookingRequest $request): BookingList;
}

