<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class SetAppointmentFulfillmentDataRequest extends Dto
{
    protected static array $complexArrayTypes = [
        'appointmentResources' => [AppointmentResource::class],
        'fulfillmentDocuments' => [FulfillmentDocument::class],
    ];

    /**
     * @param  ?FulfillmentTime  $fulfillmentTime  Input for fulfillment time details
     * @param  AppointmentResource[]|null  $appointmentResources  List of resources that performs or performed job appointment fulfillment.
     * @param  FulfillmentDocument[]|null  $fulfillmentDocuments  List of documents captured during service appointment fulfillment.
     */
    public function __construct(
        public readonly ?FulfillmentTime $fulfillmentTime = null,
        public readonly ?array $appointmentResources = null,
        public readonly ?array $fulfillmentDocuments = null,
    ) {
    }
}
