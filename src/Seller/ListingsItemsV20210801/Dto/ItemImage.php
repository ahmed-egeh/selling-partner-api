<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemImage extends Dto
{
    /**
     * @param  string  $link  Link, or URL, for the image.
     * @param  int  $height  Height of the image in pixels.
     * @param  int  $width  Width of the image in pixels.
     */
    public function __construct(
        public readonly string $link,
        public readonly int $height,
        public readonly int $width,
    ) {
    }
}
