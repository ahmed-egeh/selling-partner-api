<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class Promotion extends Dto
{
    protected static array $attributeMap = [
        'promotionType' => 'PromotionType',
        'promotionId' => 'PromotionId',
        'promotionAmount' => 'PromotionAmount',
    ];

    /**
     * @param  ?string  $promotionType  The type of promotion.
     * @param  ?string  $promotionId  The seller-specified identifier for the promotion.
     * @param  ?Currency  $promotionAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $promotionType = null,
        public readonly ?string $promotionId = null,
        public readonly ?Currency $promotionAmount = null,
    ) {
    }
}
