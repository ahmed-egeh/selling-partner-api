<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class OpenInterval extends Dto
{
    protected static array $attributeMap = ['startTime' => 'StartTime', 'endTime' => 'EndTime'];

    /**
     * @param  ?OpenTimeInterval  $startTime  The time when the business opens or closes.
     * @param  ?OpenTimeInterval  $endTime  The time when the business opens or closes.
     */
    public function __construct(
        public readonly ?OpenTimeInterval $startTime = null,
        public readonly ?OpenTimeInterval $endTime = null,
    ) {
    }
}
