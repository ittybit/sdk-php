<?php

namespace Ittybit\Media;

use GuzzleHttp\ClientInterface;
use Ittybit\Core\Client\RawClient;
use Ittybit\Media\Requests\MediaListRequest;
use Ittybit\Types\MediaListResponseItem;
use Ittybit\Exceptions\IttybitException;
use Ittybit\Exceptions\IttybitApiException;
use Ittybit\Core\Json\JsonApiRequest;
use Ittybit\Environments;
use Ittybit\Core\Client\HttpMethod;
use Ittybit\Core\Json\JsonDecoder;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;
use Ittybit\Media\Requests\MediaCreateRequest;
use Ittybit\Media\Types\MediaCreateResponse;
use Ittybit\Media\Types\MediaGetResponse;
use Ittybit\Media\Types\MediaDeleteResponse;
use Ittybit\Media\Requests\MediaUpdateRequest;
use Ittybit\Media\Types\MediaUpdateResponse;

class MediaClient
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
     * Retrieves a paginated list of all media for the current project.
     *
     * @param MediaListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return array<MediaListResponseItem>
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function list(MediaListRequest $request, ?array $options = null): array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->getPage() != null) {
            $query['page'] = $request->getPage();
        }
        if ($request->getLimit() != null) {
            $query['limit'] = $request->getLimit();
        }
        $headers = [];
        $headers['Accept-Version'] = '2025-08-20';
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "media",
                    method: HttpMethod::GET,
                    headers: $headers,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return JsonDecoder::decodeArray($json, [MediaListResponseItem::class]); // @phpstan-ignore-line
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

    /**
     * Creates a new media item. See [Media Object](/docs/media) for more details.
     *
     * @param MediaCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return MediaCreateResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function create(MediaCreateRequest $request, ?array $options = null): MediaCreateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Accept-Version'] = '2025-08-20';
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "media",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return MediaCreateResponse::fromJson($json);
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

    /**
     * Retrieves the media object for a media with the given ID.
     *
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return MediaGetResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function get(string $id, ?array $options = null): MediaGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "media/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return MediaGetResponse::fromJson($json);
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

    /**
     * Permanently removes a media object from the system. This action cannot be undone.
     *
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return MediaDeleteResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function delete(string $id, ?array $options = null): MediaDeleteResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "media/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return MediaDeleteResponse::fromJson($json);
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

    /**
     * Updates a media object's `title`, `alt`, or `metadata`. Only the specified fields will be updated.
     *
     * @param string $id
     * @param MediaUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return MediaUpdateResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function update(string $id, MediaUpdateRequest $request, ?array $options = null): MediaUpdateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        $headers['Accept-Version'] = '2025-08-20';
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "media/{$id}",
                    method: HttpMethod::PATCH,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return MediaUpdateResponse::fromJson($json);
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
