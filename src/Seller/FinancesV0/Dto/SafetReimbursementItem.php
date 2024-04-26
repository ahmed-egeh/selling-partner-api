<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class SafetReimbursementItem extends Dto
{
    protected static array $complexArrayTypes = ['itemChargeList' => [ChargeComponent::class]];

    /**
     * @param  ChargeComponent[]|null  $itemChargeList  A list of charge information on the seller's account.
     * @param  ?string  $productDescription  The description of the item as shown on the product detail page on the retail website.
     * @param  ?string  $quantity  The number of units of the item being reimbursed.
     */
    public function __construct(
        public readonly ?array $itemChargeList = null,
        public readonly ?string $productDescription = null,
        public readonly ?string $quantity = null,
    ) {
    }
}
