<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class LabelFormatOptionRequest extends Dto
{
    protected static array $attributeMap = ['includePackingSlipWithLabel' => 'IncludePackingSlipWithLabel'];

    /**
     * @param  ?bool  $includePackingSlipWithLabel  When true, include a packing slip with the label.
     */
    public function __construct(
        public readonly ?bool $includePackingSlipWithLabel = null,
    ) {
    }
}
