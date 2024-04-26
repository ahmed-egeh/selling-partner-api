<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class BrandRefinement extends Dto
{
    /**
     * @param  int  $numberOfResults  The estimated number of results that would still be returned if refinement key applied.
     * @param  string  $brandName  Brand name. For display and can be used as a search refinement.
     */
    public function __construct(
        public readonly int $numberOfResults,
        public readonly string $brandName,
    ) {
    }
}
