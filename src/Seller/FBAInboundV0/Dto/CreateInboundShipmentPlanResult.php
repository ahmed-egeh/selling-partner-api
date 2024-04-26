<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class CreateInboundShipmentPlanResult extends Dto
{
    protected static array $attributeMap = ['inboundShipmentPlans' => 'InboundShipmentPlans'];

    protected static array $complexArrayTypes = ['inboundShipmentPlans' => [InboundShipmentPlan::class]];

    /**
     * @param  InboundShipmentPlan[]|null  $inboundShipmentPlans  A list of inbound shipment plan information
     */
    public function __construct(
        public readonly ?array $inboundShipmentPlans = null,
    ) {
    }
}
