<?php

namespace Ittybit\Signatures;

use GuzzleHttp\ClientInterface;
use Ittybit\Core\Client\RawClient;
use Ittybit\Signatures\Requests\SignaturesCreateRequest;
use Ittybit\Types\SignatureResponse;
use Ittybit\Exceptions\IttybitException;
use Ittybit\Exceptions\IttybitApiException;
use Ittybit\Core\Json\JsonApiRequest;
use Ittybit\Environments;
use Ittybit\Core\Client\HttpMethod;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;

class SignaturesClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * You can use signatures to create signed URLs which grant access to your project's resources, without revealing your project's API key. URLs can expire after a specified time and be limited to HTTP `GET` method for read-only access, or HTTP `PUT` method for client-side uploads.
     *
     * @param SignaturesCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return SignatureResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function create(SignaturesCreateRequest $request, ?array $options = null): SignatureResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "signatures",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return SignatureResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new IttybitException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new IttybitException(message: $e->getMessage(), previous: $e);
            }
            throw new IttybitApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new IttybitException(message: $e->getMessage(), previous: $e);
        }
        throw new IttybitApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
