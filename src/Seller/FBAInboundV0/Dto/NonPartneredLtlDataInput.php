<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class NonPartneredLtlDataInput extends Dto
{
    protected static array $attributeMap = ['carrierName' => 'CarrierName', 'proNumber' => 'ProNumber'];

    /**
     * @param  string  $carrierName  The carrier that you are using for the inbound shipment.
     * @param  string  $proNumber  The PRO number ("progressive number" or "progressive ID") assigned to the shipment by the carrier.
     */
    public function __construct(
        public readonly string $carrierName,
        public readonly string $proNumber,
    ) {
    }
}
