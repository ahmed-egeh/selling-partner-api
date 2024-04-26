<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class PartyIdentification extends Dto
{
    /**
     * @param  string  $partyId  Assigned identification for the party. For example, warehouse code or vendor code. Please refer to specific party for more details.
     */
    public function __construct(
        public readonly string $partyId,
    ) {
    }
}
