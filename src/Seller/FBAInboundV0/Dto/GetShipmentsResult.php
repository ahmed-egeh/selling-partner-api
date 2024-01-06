<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetShipmentsResult extends BaseDto
{
    protected static array $complexArrayTypes = ['shipmentData' => [InboundShipmentInfo::class]];

    /**
     * @param  InboundShipmentInfo[]  $shipmentData A list of inbound shipment information.
     * @param  string  $nextToken When present and not empty, pass this string token in the next request to return the next response page.
     */
    public function __construct(
        public readonly array $shipmentData,
        public readonly string $nextToken,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}