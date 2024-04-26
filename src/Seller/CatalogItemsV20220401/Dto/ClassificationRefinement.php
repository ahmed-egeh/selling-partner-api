<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ClassificationRefinement extends Dto
{
    /**
     * @param  int  $numberOfResults  The estimated number of results that would still be returned if refinement key applied.
     * @param  string  $displayName  Display name for the classification.
     * @param  string  $classificationId  Identifier for the classification that can be used for search refinement purposes.
     */
    public function __construct(
        public readonly int $numberOfResults,
        public readonly string $displayName,
        public readonly string $classificationId,
    ) {
    }
}
