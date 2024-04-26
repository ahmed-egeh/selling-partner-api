<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class GetTransportDetailsResult extends Dto
{
    protected static array $attributeMap = ['transportContent' => 'TransportContent'];

    /**
     * @param  ?TransportContent  $transportContent  Inbound shipment information, including carrier details, shipment status, and the workflow status for a request for shipment with an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly ?TransportContent $transportContent = null,
    ) {
    }
}
