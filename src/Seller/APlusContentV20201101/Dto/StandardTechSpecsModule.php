<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTechSpecsModule extends Dto
{
    protected static array $complexArrayTypes = ['specificationList' => [StandardTextPairBlock::class]];

    /**
     * @param  StandardTextPairBlock[]  $specificationList  The specification list.
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?int  $tableCount  The number of tables to present. Features are evenly divided between the tables.
     */
    public function __construct(
        public readonly array $specificationList,
        public readonly ?TextComponent $headline = null,
        public readonly ?int $tableCount = null,
    ) {
    }
}
