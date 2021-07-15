<?php

declare(strict_types=1);

namespace App\Components\BookingCom;


class DateRange
{
    /**
     * @var \DateTime
     */
    private $from;
    /**
     * @var \DateTime
     */
    private $to;

    public function __construct(\DateTime $from, \DateTime $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
