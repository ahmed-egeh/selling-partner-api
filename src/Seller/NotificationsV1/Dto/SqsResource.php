<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class SqsResource extends Dto
{
    /**
     * @param  string  $arn  The Amazon Resource Name (ARN) associated with the SQS queue.
     */
    public function __construct(
        public readonly string $arn,
    ) {
    }
}