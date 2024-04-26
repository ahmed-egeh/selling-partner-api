<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class PlainTextItem extends Dto
{
    /**
     * @param  int  $position  The rank or index of this text item within the collection. Different items cannot occupy the same position within a single collection.
     * @param  string  $value  The actual plain text.
     */
    public function __construct(
        public readonly int $position,
        public readonly string $value,
    ) {
    }
}
