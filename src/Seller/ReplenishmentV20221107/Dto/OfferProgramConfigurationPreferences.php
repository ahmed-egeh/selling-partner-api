<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class OfferProgramConfigurationPreferences extends Dto
{
    /**
     * @param  ?string  $autoEnrollment  The auto-enrollment preference indicates whether the offer is opted-in to or opted-out of Amazon's auto-enrollment feature.
     */
    public function __construct(
        public readonly ?string $autoEnrollment = null,
    ) {
    }
}
