<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentInvoiceStatusInfo extends Dto
{
    protected static array $attributeMap = ['amazonShipmentId' => 'AmazonShipmentId', 'invoiceStatus' => 'InvoiceStatus'];

    /**
     * @param  ?string  $amazonShipmentId  The Amazon-defined shipment identifier.
     * @param  ?string  $invoiceStatus  The shipment invoice status.
     */
    public function __construct(
        public readonly ?string $amazonShipmentId = null,
        public readonly ?string $invoiceStatus = null,
    ) {
    }
}
