<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemVendorDetailsByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?string  $brandCode  Brand code associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCode  Manufacturer code associated with an Amazon catalog item.
     * @param  ?string  $manufacturerCodeParent  Parent vendor code of the manufacturer code.
     * @param  ?ItemVendorDetailsCategory  $productCategory  Product category or subcategory associated with an Amazon catalog item.
     * @param  ?string  $productGroup  Product group associated with an Amazon catalog item.
     * @param  ?ItemVendorDetailsCategory  $productSubcategory  Product category or subcategory associated with an Amazon catalog item.
     * @param  ?string  $replenishmentCategory  Replenishment category associated with an Amazon catalog item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?string $brandCode = null,
        public readonly ?string $manufacturerCode = null,
        public readonly ?string $manufacturerCodeParent = null,
        public readonly ?ItemVendorDetailsCategory $productCategory = null,
        public readonly ?string $productGroup = null,
        public readonly ?ItemVendorDetailsCategory $productSubcategory = null,
        public readonly ?string $replenishmentCategory = null,
    ) {
    }
}
