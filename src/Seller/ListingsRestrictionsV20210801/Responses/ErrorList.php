<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errorList' => [Error::class]];

    /**
     * @param  Error[]  $errorList  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $errorList,
    ) {
    }
}
