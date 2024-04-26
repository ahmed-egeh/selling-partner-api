<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ShippingPromiseSet extends Dto
{
    /**
     * @param  ?TimeRange  $deliveryWindow  The time range.
     * @param  ?TimeRange  $receiveWindow  The time range.
     */
    public function __construct(
        public readonly ?TimeRange $deliveryWindow = null,
        public readonly ?TimeRange $receiveWindow = null,
    ) {
    }
}
