<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\Error;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\ShipmentInvoiceStatusResponse;

final class GetInvoiceStatusResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ShipmentInvoiceStatusResponse  $payload  The shipment invoice status response.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShipmentInvoiceStatusResponse $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
