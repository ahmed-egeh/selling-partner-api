<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class TestOrder extends Dto
{
    /**
     * @param  string  $orderId  An error code that identifies the type of error that occurred.
     */
    public function __construct(
        public readonly string $orderId,
    ) {
    }
}
