<?php

declare(strict_types=1);

namespace App\Domain\Booking\Contracts;

use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\DTO\BookingSearchResult;

interface BookingProviderInterface
{
    public function find(BookingRequest $request): BookingSearchResult;
}
