<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class Error extends Dto
{
    /**
     * @param  string  $code  An error code that identifies the type of error that occurred.
     * @param  string  $message  A message that describes the error condition in a human-readable form.
     * @param  ?string  $details  Additional details that can help the caller understand or fix the issue.
     * @param  ?string  $errorLevel  The type of error.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
        public readonly ?string $details = null,
        public readonly ?string $errorLevel = null,
    ) {
    }
}
