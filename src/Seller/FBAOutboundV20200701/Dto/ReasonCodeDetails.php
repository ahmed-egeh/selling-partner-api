<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class ReasonCodeDetails extends Dto
{
    /**
     * @param  string  $returnReasonCode  A code that indicates a valid return reason.
     * @param  string  $description  A human readable description of the return reason code.
     * @param  ?string  $translatedDescription  A translation of the description. The translation is in the language specified in the Language request parameter.
     */
    public function __construct(
        public readonly string $returnReasonCode,
        public readonly string $description,
        public readonly ?string $translatedDescription = null,
    ) {
    }
}
