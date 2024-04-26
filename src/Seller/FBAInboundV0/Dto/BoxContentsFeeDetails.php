<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class BoxContentsFeeDetails extends Dto
{
    protected static array $attributeMap = [
        'totalUnits' => 'TotalUnits',
        'feePerUnit' => 'FeePerUnit',
        'totalFee' => 'TotalFee',
    ];

    /**
     * @param  ?int  $totalUnits  The item quantity.
     * @param  ?Amount  $feePerUnit  The monetary value.
     * @param  ?Amount  $totalFee  The monetary value.
     */
    public function __construct(
        public readonly ?int $totalUnits = null,
        public readonly ?Amount $feePerUnit = null,
        public readonly ?Amount $totalFee = null,
    ) {
    }
}
