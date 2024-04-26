<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemSalesRanksByMarketplace extends Dto
{
    protected static array $complexArrayTypes = [
        'classificationRanks' => [ItemClassificationSalesRank::class],
        'displayGroupRanks' => [ItemDisplayGroupSalesRank::class],
    ];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemClassificationSalesRank[]|null  $classificationRanks  Sales ranks of an Amazon catalog item for an Amazon marketplace by classification.
     * @param  ItemDisplayGroupSalesRank[]|null  $displayGroupRanks  Sales ranks of an Amazon catalog item for an Amazon marketplace by website display group.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?array $classificationRanks = null,
        public readonly ?array $displayGroupRanks = null,
    ) {
    }
}
