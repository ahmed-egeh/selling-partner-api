<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class CreateLegalDisclosureRequest extends Dto
{
    protected static array $complexArrayTypes = ['attachments' => [Attachment::class]];

    /**
     * @param  Attachment[]|null  $attachments  Attachments to include in the message to the buyer.
     */
    public function __construct(
        public readonly ?array $attachments = null,
    ) {
    }
}
