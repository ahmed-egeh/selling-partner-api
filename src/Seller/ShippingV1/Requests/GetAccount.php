<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ShippingV1\Responses\GetAccountResponse;

/**
 * getAccount
 */
class GetAccount extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/shipping/v1/account';
    }

    public function createDtoFromResponse(Response $response): GetAccountResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetAccountResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
