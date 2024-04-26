<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardComparisonTableModule extends Dto
{
    protected static array $complexArrayTypes = [
        'productColumns' => [StandardComparisonProductBlock::class],
        'metricRowLabels' => [PlainTextItem::class],
    ];

    /**
     * @param  StandardComparisonProductBlock[]|null  $productColumns
     * @param  PlainTextItem[]|null  $metricRowLabels
     */
    public function __construct(
        public readonly ?array $productColumns = null,
        public readonly ?array $metricRowLabels = null,
    ) {
    }
}
