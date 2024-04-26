<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class AmazonShipmentDetails extends Dto
{
    /**
     * @param  string  $shipmentId  This attribute is required only for a Direct Fulfillment shipment. This is the encrypted shipment ID.
     */
    public function __construct(
        public readonly string $shipmentId,
    ) {
    }
}
