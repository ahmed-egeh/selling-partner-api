<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CatalogItemsV0\Requests\GetCatalogItem;
use SellingPartnerApi\Seller\CatalogItemsV0\Requests\ListCatalogCategories;
use SellingPartnerApi\Seller\CatalogItemsV0\Requests\ListCatalogItems;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for which items are returned.
     * @param  string|null  $query Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
     * @param  string|null  $queryContextId An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
     * @param  string|null  $sellerSku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string|null  $upc A 12-digit bar code used for retail packaging.
     * @param  string|null  $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
     * @param  string|null  $isbn The unique commercial book identifier used to identify books internationally.
     * @param  string|null  $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.
     */
    public function listCatalogItems(
        string $marketplaceId,
        ?string $query = null,
        ?string $queryContextId = null,
        ?string $sellerSku = null,
        ?string $upc = null,
        ?string $ean = null,
        ?string $isbn = null,
        ?string $jan = null,
    ): Response {
        return $this->connector->send(new ListCatalogItems($marketplaceId, $query, $queryContextId, $sellerSku, $upc, $ean, $isbn, $jan));
    }

    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for the item.
     */
    public function getCatalogItem(string $asin, string $marketplaceId): Response
    {
        return $this->connector->send(new GetCatalogItem($asin, $marketplaceId));
    }

    /**
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for the item.
     * @param  string|null  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string|null  $sellerSku Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     */
    public function listCatalogCategories(
        string $marketplaceId,
        ?string $asin = null,
        ?string $sellerSku = null,
    ): Response {
        return $this->connector->send(new ListCatalogCategories($marketplaceId, $asin, $sellerSku));
    }
}