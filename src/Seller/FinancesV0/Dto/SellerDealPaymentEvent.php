<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class SellerDealPaymentEvent extends Dto
{
    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $dealId  The unique identifier of the deal.
     * @param  ?string  $dealDescription  The internal description of the deal.
     * @param  ?string  $eventType  The type of event: SellerDealComplete.
     * @param  ?string  $feeType  The type of fee: RunLightningDealFee.
     * @param  ?Currency  $feeAmount  A currency type and amount.
     * @param  ?Currency  $taxAmount  A currency type and amount.
     * @param  ?Currency  $totalAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $dealId = null,
        public readonly ?string $dealDescription = null,
        public readonly ?string $eventType = null,
        public readonly ?string $feeType = null,
        public readonly ?Currency $feeAmount = null,
        public readonly ?Currency $taxAmount = null,
        public readonly ?Currency $totalAmount = null,
    ) {
    }
}
