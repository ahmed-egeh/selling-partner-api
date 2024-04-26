<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseLabelsResult;

final class PurchaseLabelsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?PurchaseLabelsResult  $payload  The payload schema for the purchaseLabels operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?PurchaseLabelsResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
