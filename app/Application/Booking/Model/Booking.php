<?php

declare(strict_types=1);

namespace App\Application\Booking\Model;


use App\Domain\Booking\Model\BookingInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $name string
 */
class Booking extends Model implements BookingInterface
{
    public function getName(): string
    {
        return $this->name;
    }
}
