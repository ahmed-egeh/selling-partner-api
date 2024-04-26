<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FeedsV20210630\Dto;

use SellingPartnerApi\Dto;

final class CreateFeedDocumentSpecification extends Dto
{
    /**
     * @param  string  $contentType  The content type of the feed.
     */
    public function __construct(
        public readonly string $contentType,
    ) {
    }
}
