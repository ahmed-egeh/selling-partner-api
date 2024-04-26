<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class Buyer extends Dto
{
    /**
     * @param  ?string  $locale  The buyer's language of preference, indicated with a locale-specific language tag. Examples: "en-US", "zh-CN", and "en-GB".
     */
    public function __construct(
        public readonly ?string $locale = null,
    ) {
    }
}
