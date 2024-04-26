<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use SellingPartnerApi\Dto;

final class PropertyGroup extends Dto
{
    /**
     * @param  ?string  $title  The display label of the property group.
     * @param  ?string  $description  The description of the property group.
     * @param  ?string[]  $propertyNames  The names of the schema properties for the property group.
     */
    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $description = null,
        public readonly ?array $propertyNames = null,
    ) {
    }
}
