<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto;

use SellingPartnerApi\Dto;

final class Restriction extends Dto
{
    protected static array $complexArrayTypes = ['reasons' => [Reason::class]];

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Identifies the Amazon marketplace where the restriction is enforced.
     * @param  ?string  $conditionType  The condition that applies to the restriction.
     * @param  Reason[]|null  $reasons  A list of reasons for the restriction.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?string $conditionType = null,
        public readonly ?array $reasons = null,
    ) {
    }
}
