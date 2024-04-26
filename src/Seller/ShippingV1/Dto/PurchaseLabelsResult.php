<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class PurchaseLabelsResult extends Dto
{
    protected static array $complexArrayTypes = ['labelResults' => [LabelResult::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier.
     * @param  AcceptedRate  $acceptedRate  The specific rate purchased for the shipment, or null if unpurchased.
     * @param  LabelResult[]  $labelResults  A list of label results
     * @param  ?string  $clientReferenceId  Client reference id.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly AcceptedRate $acceptedRate,
        public readonly array $labelResults,
        public readonly ?string $clientReferenceId = null,
    ) {
    }
}
