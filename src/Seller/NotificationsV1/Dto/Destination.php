<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class Destination extends Dto
{
    /**
     * @param  string  $name  The developer-defined name for this destination.
     * @param  string  $destinationId  The destination identifier generated when you created the destination.
     * @param  DestinationResource  $resource  The destination resource types.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $destinationId,
        public readonly DestinationResource $resource,
    ) {
    }
}
