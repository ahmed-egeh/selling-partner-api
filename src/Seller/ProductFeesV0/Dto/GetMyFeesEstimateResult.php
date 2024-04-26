<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class GetMyFeesEstimateResult extends Dto
{
    protected static array $attributeMap = ['feesEstimateResult' => 'FeesEstimateResult'];

    /**
     * @param  ?FeesEstimateResult  $feesEstimateResult  An item identifier and the estimated fees for the item.
     */
    public function __construct(
        public readonly ?FeesEstimateResult $feesEstimateResult = null,
    ) {
    }
}
