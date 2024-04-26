<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateLegalDisclosureRequest;
use SellingPartnerApi\Seller\MessagingV1\Responses\CreateLegalDisclosureResponse;

/**
 * createLegalDisclosure
 */
class CreateLegalDisclosure extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateLegalDisclosureRequest  $createLegalDisclosureRequest  The request schema for the createLegalDisclosure operation.
     * @param  array  $marketplaceIds  A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function __construct(
        protected string $amazonOrderId,
        public CreateLegalDisclosureRequest $createLegalDisclosureRequest,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/messaging/v1/orders/{$this->amazonOrderId}/messages/legalDisclosure";
    }

    public function createDtoFromResponse(Response $response): CreateLegalDisclosureResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201, 400, 403, 404, 413, 415, 429, 500, 503 => CreateLegalDisclosureResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createLegalDisclosureRequest->toArray();
    }
}
