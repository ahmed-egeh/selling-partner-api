<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\TransactionId;

final class SubmitAcknowledgementResponse extends Dto
{
    /**
     * @param  ?TransactionId  $payload
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?ErrorList $errors = null,
    ) {
    }
}
