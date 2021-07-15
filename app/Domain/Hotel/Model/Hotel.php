<?php

declare(strict_types=1);

namespace App\Domain\Hotel\Model;


class Hotel
{
    /**
     * @var string
     */
    private $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}
