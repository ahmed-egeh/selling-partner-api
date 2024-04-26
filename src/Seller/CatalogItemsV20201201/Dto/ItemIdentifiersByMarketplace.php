<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class ItemIdentifiersByMarketplace extends Dto
{
    protected static array $complexArrayTypes = ['identifiers' => [ItemIdentifier::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ItemIdentifier[]  $identifiers  Identifiers associated with the item in the Amazon catalog for the indicated Amazon marketplace.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $identifiers,
    ) {
    }
}
