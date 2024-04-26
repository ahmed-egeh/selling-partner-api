<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use SellingPartnerApi\Dto;

final class TaxRegistrationDetails extends Dto
{
    /**
     * @param  string  $taxRegistrationType  The tax registration type for the entity.
     * @param  string  $taxRegistrationNumber  The tax registration number for the entity. For example, VAT ID, Consumption Tax ID.
     */
    public function __construct(
        public readonly string $taxRegistrationType,
        public readonly string $taxRegistrationNumber,
    ) {
    }
}
