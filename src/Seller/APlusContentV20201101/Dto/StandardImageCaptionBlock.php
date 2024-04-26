<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardImageCaptionBlock extends Dto
{
    /**
     * @param  ?ImageComponent  $image  A reference to an image, hosted in the A+ Content media library.
     * @param  ?TextComponent  $caption  Rich text content.
     */
    public function __construct(
        public readonly ?ImageComponent $image = null,
        public readonly ?TextComponent $caption = null,
    ) {
    }
}
