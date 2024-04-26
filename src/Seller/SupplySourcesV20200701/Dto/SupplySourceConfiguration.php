<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class SupplySourceConfiguration extends Dto
{
    /**
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?string  $timezone  Please see RFC 6557, should be a canonical time zone ID as listed here: https://www.joda.org/joda-time/timezones.html.
     */
    public function __construct(
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
        public readonly ?string $timezone = null,
    ) {
    }
}
