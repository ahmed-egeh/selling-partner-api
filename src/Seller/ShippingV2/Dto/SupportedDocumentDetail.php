<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class SupportedDocumentDetail extends Dto
{
    /**
     * @param  string  $name  The type of shipping document.
     * @param  bool  $isMandatory  When true, the supported document type is required.
     */
    public function __construct(
        public readonly string $name,
        public readonly bool $isMandatory,
    ) {
    }
}
