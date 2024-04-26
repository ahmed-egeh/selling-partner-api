<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InvalidSku extends Dto
{
    protected static array $attributeMap = ['sellerSku' => 'SellerSKU', 'errorReason' => 'ErrorReason'];

    /**
     * @param  ?string  $sellerSku  The seller SKU of the item.
     * @param  ?string  $errorReason  The reason that the ASIN is invalid.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?string $errorReason = null,
    ) {
    }
}
