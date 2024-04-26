<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class CreateScheduledPackagesRequest extends Dto
{
    protected static array $complexArrayTypes = ['orderScheduleDetailsList' => [OrderScheduleDetails::class]];

    /**
     * @param  string  $marketplaceId  A string of up to 255 characters.
     * @param  OrderScheduleDetails[]  $orderScheduleDetailsList  An array allowing users to specify orders to be scheduled.
     * @param  string  $labelFormat  The file format in which the shipping label will be created.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly array $orderScheduleDetailsList,
        public readonly string $labelFormat,
    ) {
    }
}
