<?php

declare(strict_types=1);

namespace App\Components\Agoda\Adapter;

use App\Components\Agoda\Client;
use App\Domain\Booking\Contracts\BookingProviderInterface;
use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\DTO\BookingSearchResult;

class AgodaAdapter implements BookingProviderInterface
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
        $this->client->find($request->getHotel()->getCode());
    }
}
