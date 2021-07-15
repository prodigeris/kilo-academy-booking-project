<?php

declare(strict_types=1);

namespace App\Domain\Booking\Collection;


use App\Domain\Booking\Model\BookingInterface;

class BookingList implements \Iterator, \Countable
{

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    /**
     * @param array|BookingInterface[] $bookings
     */
    public static function build(array $bookings): self
    {

    }
}
