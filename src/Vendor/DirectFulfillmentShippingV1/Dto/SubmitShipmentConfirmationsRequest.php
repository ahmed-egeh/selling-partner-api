<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentConfirmationsRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentConfirmations' => ShipmentConfirmation::class];

    /**
     * @param  ShipmentConfirmation[]|null  $shipmentConfirmations  Array of `ShipmentConfirmation` objects, each representing confirmation details for a specific shipment.
     */
    public function __construct(
        public readonly ?array $shipmentConfirmations = null,
    ) {}
}
