<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class LabelFormatOption extends Dto
{
    protected static array $attributeMap = [
        'includePackingSlipWithLabel' => 'IncludePackingSlipWithLabel',
        'labelFormat' => 'LabelFormat',
    ];

    /**
     * @param  ?bool  $includePackingSlipWithLabel  When true, include a packing slip with the label.
     * @param  ?string  $labelFormat  The label format.
     */
    public function __construct(
        public readonly ?bool $includePackingSlipWithLabel = null,
        public readonly ?string $labelFormat = null,
    ) {
    }
}
