<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class ShipmentStatusUpdate extends Dto
{
    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment for which to update the shipment status.
     * @param  StatusUpdateDetails  $statusUpdateDetails  Details for the shipment status update given by the vendor for the specific package.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly StatusUpdateDetails $statusUpdateDetails,
    ) {
    }
}
