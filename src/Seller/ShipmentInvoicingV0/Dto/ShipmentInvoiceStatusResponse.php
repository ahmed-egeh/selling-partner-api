<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentInvoiceStatusResponse extends Dto
{
    protected static array $attributeMap = ['shipments' => 'Shipments'];

    /**
     * @param  ?ShipmentInvoiceStatusInfo  $shipments  The shipment invoice status information.
     */
    public function __construct(
        public readonly ?ShipmentInvoiceStatusInfo $shipments = null,
    ) {
    }
}
