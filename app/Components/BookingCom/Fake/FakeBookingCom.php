<?php

declare(strict_types=1);

namespace App\Components\BookingCom\Fake;


use App\Components\BookingCom\Adapter\BookingComAdapter;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\DTO\BookingSearchResult;

class FakeBookingCom extends BookingComAdapter
{
    public function find(BookingRequest $request): BookingSearchResult
    {
        return new BookingSearchResult();
    }
}
