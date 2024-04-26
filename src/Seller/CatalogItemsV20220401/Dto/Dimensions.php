<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  ?Dimension  $height  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $length  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $weight  Individual dimension value of an Amazon catalog item or item package.
     * @param  ?Dimension  $width  Individual dimension value of an Amazon catalog item or item package.
     */
    public function __construct(
        public readonly ?Dimension $height = null,
        public readonly ?Dimension $length = null,
        public readonly ?Dimension $weight = null,
        public readonly ?Dimension $width = null,
    ) {
    }
}
