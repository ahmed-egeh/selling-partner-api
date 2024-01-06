<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesResult extends BaseDto
{
    protected static array $complexArrayTypes = ['rates' => [Rate::class], 'ineligibleRates' => [IneligibleRate::class]];

    /**
     * @param  string  $requestToken A unique token generated to identify a getRates operation.
     * @param  Rate[]  $rates A list of eligible shipping service offerings.
     * @param  IneligibleRate[]  $ineligibleRates A list of ineligible shipping service offerings.
     */
    public function __construct(
        public readonly ?string $requestToken = null,
        public readonly ?array $rates = null,
        public readonly ?array $ineligibleRates = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}