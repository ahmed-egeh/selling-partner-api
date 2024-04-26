<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class OfferProgramConfiguration extends Dto
{
    /**
     * @param  ?OfferProgramConfigurationPreferences  $preferences  An object which contains the preferences applied to the offer.
     * @param  ?OfferProgramConfigurationPromotions  $promotions  An object which represents all promotions applied to an offer.
     * @param  ?string  $enrollmentMethod  The enrollment method used to enroll the offer into the program.
     */
    public function __construct(
        public readonly ?OfferProgramConfigurationPreferences $preferences = null,
        public readonly ?OfferProgramConfigurationPromotions $promotions = null,
        public readonly ?string $enrollmentMethod = null,
    ) {
    }
}
