<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\OrdersV0\Responses\GetOrderBuyerInfoResponse;

/**
 * getOrderBuyerInfo
 */
class GetOrderBuyerInfo extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function __construct(
        protected string $orderId,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/orders/v0/orders/{orderId}/buyerInfo', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/buyerInfo";
    }

    public function createDtoFromResponse(Response $response): GetOrderBuyerInfoResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => GetOrderBuyerInfoResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
