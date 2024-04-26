<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class OperatingHour extends Dto
{
    /**
     * @param  ?string  $startTime  The opening time, ISO 8601 formatted timestamp without date, HH:mm.
     * @param  ?string  $endTime  The closing time, ISO 8601 formatted timestamp without date, HH:mm.
     */
    public function __construct(
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
    ) {
    }
}
