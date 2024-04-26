<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use SellingPartnerApi\Dto;

final class ResearchingQuantityEntry extends Dto
{
    /**
     * @param  string  $name  The duration of the research.
     * @param  int  $quantity  The number of units.
     */
    public function __construct(
        public readonly string $name,
        public readonly int $quantity,
    ) {
    }
}
