<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class Label extends Dto
{
    protected static array $attributeMap = [
        'dimensions' => 'Dimensions',
        'fileContents' => 'FileContents',
        'customTextForLabel' => 'CustomTextForLabel',
        'labelFormat' => 'LabelFormat',
        'standardIdForLabel' => 'StandardIdForLabel',
    ];

    /**
     * @param  LabelDimensions  $dimensions  Dimensions for printing a shipping label.
     * @param  FileContents  $fileContents  The document data and checksum.
     * @param  ?string  $customTextForLabel  Custom text to print on the label.
     *
     * Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     * @param  ?string  $labelFormat  The label format.
     * @param  ?string  $standardIdForLabel  The type of standard identifier to print on the label.
     */
    public function __construct(
        public readonly LabelDimensions $dimensions,
        public readonly FileContents $fileContents,
        public readonly ?string $customTextForLabel = null,
        public readonly ?string $labelFormat = null,
        public readonly ?string $standardIdForLabel = null,
    ) {
    }
}
