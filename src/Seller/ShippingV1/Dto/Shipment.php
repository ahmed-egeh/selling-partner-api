<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Shipment extends Dto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier.
     * @param  string  $clientReferenceId  Client reference id.
     * @param  Address  $shipFrom  The address.
     * @param  Address  $shipTo  The address.
     * @param  Container[]  $containers  A list of container.
     * @param  ?AcceptedRate  $acceptedRate  The specific rate purchased for the shipment, or null if unpurchased.
     * @param  ?Party  $shipper  The account related with the shipment.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $clientReferenceId,
        public readonly Address $shipFrom,
        public readonly Address $shipTo,
        public readonly array $containers,
        public readonly ?AcceptedRate $acceptedRate = null,
        public readonly ?Party $shipper = null,
    ) {
    }
}
