<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class AvailableShippingServiceOptions extends Dto
{
    protected static array $attributeMap = [
        'availableCarrierWillPickUpOptions' => 'AvailableCarrierWillPickUpOptions',
        'availableDeliveryExperienceOptions' => 'AvailableDeliveryExperienceOptions',
    ];

    protected static array $complexArrayTypes = [
        'availableCarrierWillPickUpOptions' => [AvailableCarrierWillPickUpOption::class],
        'availableDeliveryExperienceOptions' => [AvailableDeliveryExperienceOption::class],
    ];

    /**
     * @param  AvailableCarrierWillPickUpOption[]  $availableCarrierWillPickUpOptions  List of available carrier pickup options.
     * @param  AvailableDeliveryExperienceOption[]  $availableDeliveryExperienceOptions  List of available delivery experience options.
     */
    public function __construct(
        public readonly array $availableCarrierWillPickUpOptions,
        public readonly array $availableDeliveryExperienceOptions,
    ) {
    }
}