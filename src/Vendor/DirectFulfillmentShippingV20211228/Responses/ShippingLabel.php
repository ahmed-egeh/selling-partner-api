<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\LabelData;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\PartyIdentification;

final class ShippingLabel extends Response
{
    protected static array $complexArrayTypes = ['labelData' => LabelData::class];

    /**
     * @param  string  $purchaseOrderNumber  This field will contain the Purchase Order Number for this order.
     * @param  PartyIdentification  $sellingParty  Name, address, and tax details for a party.
     * @param  PartyIdentification  $shipFromParty  Name, address, and tax details for a party.
     * @param  string  $labelFormat  Format of the label.
     * @param  LabelData[]  $labelData  Provides the details of the packages in this shipment.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly string $labelFormat,
        public readonly array $labelData,
    ) {}
}
