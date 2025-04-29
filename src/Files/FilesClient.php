<?php

namespace Ittybit\Files;

use GuzzleHttp\ClientInterface;
use Ittybit\Core\Client\RawClient;
use Ittybit\Files\Requests\FilesListRequest;
use Ittybit\Files\Types\FilesListResponse;
use Ittybit\Exceptions\IttybitException;
use Ittybit\Exceptions\IttybitApiException;
use Ittybit\Core\Json\JsonApiRequest;
use Ittybit\Environments;
use Ittybit\Core\Client\HttpMethod;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;
use Ittybit\Files\Requests\FilesCreateFromUrlRequest;
use Ittybit\Types\FileResponse;
use Ittybit\Files\Types\FilesGetResponse;
use Ittybit\Files\Types\FilesDeleteResponse;
use Ittybit\Files\Requests\FilesUpdateMetadataRequest;

class FilesClient
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
     * Retrieves a paginated list of all files associated with the current project. Files can be filtered using query parameters.
     *
     * @param FilesListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FilesListResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function list(FilesListRequest $request = new FilesListRequest(), ?array $options = null): FilesListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "files",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return FilesListResponse::fromJson($json);
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
     * Registers a file from a publicly accessible URL. The file will be ingested asynchronously.
     *
     * @param FilesCreateFromUrlRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FileResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function createFromUrl(FilesCreateFromUrlRequest $request, ?array $options = null): FileResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "files",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return FileResponse::fromJson($json);
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
     * Retrieves detailed information about a specific file identified by its unique ID, including its metadata, media associations, and technical properties.
     *
     * @param string $id Unique identifier of the file to retrieve. Must be a valid file ID (e.g., file_7bKpN2950Dx4EW8T).
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FilesGetResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function get(string $id, ?array $options = null): FilesGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "files/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return FilesGetResponse::fromJson($json);
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
     * Permanently removes a file from the system. This action cannot be undone. Associated media entries may still reference this file ID.
     *
     * @param string $id Unique identifier of the file to delete. Must be a valid file ID (e.g., file_7bKpN2950Dx4EW8T).
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FilesDeleteResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function delete(string $id, ?array $options = null): FilesDeleteResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "files/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return FilesDeleteResponse::fromJson($json);
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
     * Updates metadata, filename, or folder properties of an existing file. Only the specified fields will be updated.
     *
     * @param string $id Unique identifier of the file to update. Must be a valid file ID (e.g., file_abc123).
     * @param FilesUpdateMetadataRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return FileResponse
     * @throws IttybitException
     * @throws IttybitApiException
     */
    public function updateMetadata(string $id, FilesUpdateMetadataRequest $request = new FilesUpdateMetadataRequest(), ?array $options = null): FileResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "files/{$id}",
                    method: HttpMethod::PATCH,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return FileResponse::fromJson($json);
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
