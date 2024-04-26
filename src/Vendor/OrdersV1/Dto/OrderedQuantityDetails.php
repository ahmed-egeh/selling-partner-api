<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderedQuantityDetails extends Dto
{
    /**
     * @param  ?DateTime  $updatedDate  The date when the line item quantity was updated by buyer. Must be in ISO-8601 date/time format.
     * @param  ?ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  ?ItemQuantity  $cancelledQuantity  Details of quantity ordered.
     */
    public function __construct(
        public readonly ?\DateTime $updatedDate = null,
        public readonly ?ItemQuantity $orderedQuantity = null,
        public readonly ?ItemQuantity $cancelledQuantity = null,
    ) {
    }
}
