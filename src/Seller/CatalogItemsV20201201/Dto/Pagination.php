<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class Pagination extends Dto
{
    /**
     * @param  ?string  $nextToken  A token that can be used to fetch the next page.
     * @param  ?string  $previousToken  A token that can be used to fetch the previous page.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
        public readonly ?string $previousToken = null,
    ) {
    }
}
