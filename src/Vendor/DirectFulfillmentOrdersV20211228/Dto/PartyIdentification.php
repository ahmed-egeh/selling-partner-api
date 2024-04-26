<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class PartyIdentification extends Dto
{
    /**
     * @param  string  $partyId  Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     * @param  ?Address  $address  Address of the party.
     * @param  ?TaxRegistrationDetails  $taxInfo  Tax registration details of the entity.
     */
    public function __construct(
        public readonly string $partyId,
        public readonly ?Address $address = null,
        public readonly ?TaxRegistrationDetails $taxInfo = null,
    ) {
    }
}
