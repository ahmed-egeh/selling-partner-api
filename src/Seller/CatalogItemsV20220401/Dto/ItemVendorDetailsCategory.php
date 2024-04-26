<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemVendorDetailsCategory extends Dto
{
    /**
     * @param  ?string  $displayName  Display name of the product category or subcategory
     * @param  ?string  $value  Value (code) of the product category or subcategory.
     */
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $value = null,
    ) {
    }
}
