<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class Points extends Dto
{
    protected static array $attributeMap = [
        'pointsNumber' => 'PointsNumber',
        'pointsMonetaryValue' => 'PointsMonetaryValue',
    ];

    /**
     * @param  ?int  $pointsNumber
     * @param  ?MoneyType  $pointsMonetaryValue
     */
    public function __construct(
        public readonly ?int $pointsNumber = null,
        public readonly ?MoneyType $pointsMonetaryValue = null,
    ) {
    }
}
