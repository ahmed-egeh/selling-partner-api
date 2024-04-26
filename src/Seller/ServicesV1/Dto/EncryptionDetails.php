<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class EncryptionDetails extends Dto
{
    /**
     * @param  string  $standard  The encryption standard required to encrypt or decrypt the document contents.
     * @param  string  $initializationVector  The vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC).
     * @param  string  $key  The encryption key used to encrypt or decrypt the document contents.
     */
    public function __construct(
        public readonly string $standard,
        public readonly string $initializationVector,
        public readonly string $key,
    ) {
    }
}
