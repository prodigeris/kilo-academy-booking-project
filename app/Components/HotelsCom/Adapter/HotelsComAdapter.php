<?php

declare(strict_types=1);

namespace App\Components\HotelsCom\Adapter;


use App\Components\HotelsCom\Client;
use App\Domain\Booking\Contracts\BookingProviderInterface;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\DTO\BookingSearchResult;

class HotelsComAdapter implements BookingProviderInterface
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function find(BookingRequest $request): BookingSearchResult
    {
        $this->client->fetchBookingsByHotel($request->getFrom(),
            $this->buildToDateTime($request), $request->getHotel()->getCode());
    }

    private function buildToDateTime(BookingRequest $request): \DateTime
    {
        return $request->getFrom() + $request->getNights();
    }
}
