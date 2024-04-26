<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemSalesRanksByMarketplace extends Dto
{
    protected static array $complexArrayTypes = ['ranks' => [ItemSalesRank::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemSalesRank[]  $ranks  Sales ranks of an Amazon catalog item for an Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $ranks,
    ) {
    }
}
