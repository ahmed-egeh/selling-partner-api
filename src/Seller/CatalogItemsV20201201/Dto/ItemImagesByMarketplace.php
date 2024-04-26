<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemImagesByMarketplace extends Dto
{
    protected static array $complexArrayTypes = ['images' => [ItemImage::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemImage[]  $images  Images for an item in the Amazon catalog for the indicated Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $images,
    ) {
    }
}
