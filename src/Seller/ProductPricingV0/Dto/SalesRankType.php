<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class SalesRankType extends Dto
{
    protected static array $attributeMap = ['productCategoryId' => 'ProductCategoryId', 'rank' => 'Rank'];

    /**
     * @param  string  $productCategoryId  Identifies the item category from which the sales rank is taken.
     * @param  int  $rank  The sales rank of the item within the item category.
     */
    public function __construct(
        public readonly string $productCategoryId,
        public readonly int $rank,
    ) {
    }
}
