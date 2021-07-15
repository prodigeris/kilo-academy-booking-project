<?php

declare(strict_types=1);

namespace App\Domain\Hotel\UseCase;


use App\Domain\Booking\DTO\BookingRequest;
use App\Domain\Booking\Factory\BookingRequestFactory;
use App\Domain\Hotel\Contract\HotelSearcherInterface;
use App\Domain\Hotel\Model\Hotel;

class FindListingsForHotelUseCase
{
    /**
     * @var HotelSearcherInterface
     */
    private $searcher;
    /**
     * @var BookingRequestFactory
     */
    private $bookingRequestFactory;

    public function __construct(HotelSearcherInterface $searcher, BookingRequestFactory $bookingRequestFactory)
    {
        $this->searcher = $searcher;
        $this->bookingRequestFactory = $bookingRequestFactory;
    }

    public function find(Hotel $hotel, \DateTime $from, int $nights)
    {
        $this->searcher->find(
            $this->bookingRequestFactory->build($from, $nights, $hotel)
        );

        // booking.com, hotels.com, google hotels
    }
}
