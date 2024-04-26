<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class ListMatchingItemsResponse extends Dto
{
    protected static array $attributeMap = ['items' => 'Items'];

    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]|null  $items  A list of items.
     */
    public function __construct(
        public readonly ?array $items = null,
    ) {
    }
}
