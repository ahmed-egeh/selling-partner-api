<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemIdentifier extends Dto
{
    /**
     * @param  string  $identifierType  Type of identifier, such as UPC, EAN, or ISBN.
     * @param  string  $identifier  Identifier.
     */
    public function __construct(
        public readonly string $identifierType,
        public readonly string $identifier,
    ) {
    }
}
