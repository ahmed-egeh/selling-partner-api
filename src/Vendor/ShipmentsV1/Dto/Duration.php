<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Duration extends Dto
{
    /**
     * @param  string  $durationUnit  Unit for duration.
     * @param  int  $durationValue  Value for the duration in terms of the durationUnit.
     */
    public function __construct(
        public readonly string $durationUnit,
        public readonly int $durationValue,
    ) {
    }
}
