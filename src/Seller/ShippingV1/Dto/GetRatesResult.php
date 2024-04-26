<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class GetRatesResult extends Dto
{
    protected static array $complexArrayTypes = ['serviceRates' => [ServiceRate::class]];

    /**
     * @param  ServiceRate[]  $serviceRates  A list of service rates.
     */
    public function __construct(
        public readonly array $serviceRates,
    ) {
    }
}
