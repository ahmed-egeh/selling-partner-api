<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;

final class CustomerInvoice extends Response
{
    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for this order.
     * @param  string  $content  The Base64encoded customer invoice.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $content,
    ) {
    }
}
