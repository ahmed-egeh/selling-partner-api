<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InvalidAsin extends Dto
{
    protected static array $attributeMap = ['asin' => 'ASIN', 'errorReason' => 'ErrorReason'];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $errorReason  The reason that the ASIN is invalid.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $errorReason = null,
    ) {
    }
}
