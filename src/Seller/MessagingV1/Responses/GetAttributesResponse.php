<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\MessagingV1\Dto\Buyer;
use SellingPartnerApi\Seller\MessagingV1\Dto\Error;

final class GetAttributesResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Buyer  $buyer  The list of attributes related to the buyer.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Buyer $buyer = null,
        public readonly ?array $errors = null,
    ) {
    }
}