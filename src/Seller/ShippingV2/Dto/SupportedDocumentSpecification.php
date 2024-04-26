<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class SupportedDocumentSpecification extends Dto
{
    protected static array $complexArrayTypes = ['printOptions' => [PrintOption::class]];

    /**
     * @param  string  $format  The file format of the document.
     * @param  DocumentSize  $size  The size dimensions of the label.
     * @param  PrintOption[]  $printOptions  A list of the format options for a label.
     */
    public function __construct(
        public readonly string $format,
        public readonly DocumentSize $size,
        public readonly array $printOptions,
    ) {
    }
}