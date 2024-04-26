<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTextListBlock extends Dto
{
    protected static array $complexArrayTypes = ['textList' => [TextItem::class]];

    /**
     * @param  TextItem[]  $textList
     */
    public function __construct(
        public readonly array $textList,
    ) {
    }
}
