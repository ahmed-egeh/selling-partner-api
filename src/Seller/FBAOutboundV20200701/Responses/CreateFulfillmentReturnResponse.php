<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentReturnResult;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\Error;

final class CreateFulfillmentReturnResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CreateFulfillmentReturnResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CreateFulfillmentReturnResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
