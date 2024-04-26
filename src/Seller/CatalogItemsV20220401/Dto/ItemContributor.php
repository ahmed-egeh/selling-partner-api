<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemContributor extends Dto
{
    /**
     * @param  ItemContributorRole  $role  Role of an individual contributor in the creation of an item, such as author or actor.
     * @param  string  $value  Name of the contributor, such as Jane Austen.
     */
    public function __construct(
        public readonly ItemContributorRole $role,
        public readonly string $value,
    ) {
    }
}
