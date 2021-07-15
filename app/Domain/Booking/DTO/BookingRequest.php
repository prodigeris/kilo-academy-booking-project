<?php

declare(strict_types=1);

namespace App\Domain\Booking\DTO;

use App\Domain\Hotel\Model\Hotel;

class BookingRequest
{
    /**
     * @var \DateTime
     */
    private $from;
    /**
     * @var int
     */
    private $nights;
    /**
     * @var Hotel
     */
    private $hotel;

    public function __construct(\DateTime $from, int $nights, Hotel $hotel)
    {
        $this->from = $from;
        $this->nights = $nights;
        $this->hotel = $hotel;
    }

    /**
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getNights(): int
    {
        return $this->nights;
    }

    /**
     * @return Hotel
     */
    public function getHotel(): Hotel
    {
        return $this->hotel;
    }
}
