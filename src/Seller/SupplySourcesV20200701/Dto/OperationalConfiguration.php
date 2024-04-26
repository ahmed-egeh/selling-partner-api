<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class OperationalConfiguration extends Dto
{
    /**
     * @param  ?ContactDetails  $contactDetails  The contact details
     * @param  ?ThroughputConfig  $throughputConfig  The throughput configuration.
     * @param  ?OperatingHoursByDay  $operatingHoursByDay  The operating hours per day
     * @param  ?Duration  $handlingTime  The duration of time.
     */
    public function __construct(
        public readonly ?ContactDetails $contactDetails = null,
        public readonly ?ThroughputConfig $throughputConfig = null,
        public readonly ?OperatingHoursByDay $operatingHoursByDay = null,
        public readonly ?Duration $handlingTime = null,
    ) {
    }
}
