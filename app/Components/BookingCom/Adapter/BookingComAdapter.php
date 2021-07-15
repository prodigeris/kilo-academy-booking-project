<?php

declare(strict_types=1);

namespace App\Components\BookingCom\Adapter;


use App\Components\BookingCom\Client;
use App\Components\BookingCom\DateRange;
use App\Domain\Booking\Contracts\BookingProviderInterface;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\DTO\BookingSearchResult;

class BookingComAdapter implements BookingProviderInterface
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
        $this->client->findBookings($this->buildDateRange($request), $request->getHotel()->getCode());
    }

    private function buildDateRange(BookingRequest $request): DateRange
    {
        return new DateRange($request->getFrom(), $request->getFrom()->add(new \DateInterval()));
    }
}
