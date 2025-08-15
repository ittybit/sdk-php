<?php

namespace Ittybit;

use Ittybit\Automations\AutomationsClient;
use Ittybit\Files\FilesClient;
use Ittybit\Media\MediaClient;
use Ittybit\Tasks\TasksClient;
use Ittybit\Signatures\SignaturesClient;
use GuzzleHttp\ClientInterface;
use Ittybit\Core\Client\RawClient;
use Exception;

class IttybitClient
{
    /**
     * @var AutomationsClient $automations
     */
    public AutomationsClient $automations;

    /**
     * @var FilesClient $files
     */
    public FilesClient $files;

    /**
     * @var MediaClient $media
     */
    public MediaClient $media;

    /**
     * @var TasksClient $tasks
     */
    public TasksClient $tasks;

    /**
     * @var SignaturesClient $signatures
     */
    public SignaturesClient $signatures;

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
     * @param ?string $apiKey The apiKey to use for authentication.
     * @param ?string $version
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        ?string $apiKey = null,
        ?string $version = null,
        ?array $options = null,
    ) {
        $apiKey ??= $this->getFromEnvOrThrow('ITTYBIT_API_KEY', 'Please pass in apiKey or set the environment variable ITTYBIT_API_KEY.');
        $defaultHeaders = [
            'Authorization' => "Bearer $apiKey",
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Ittybit',
            'X-Fern-SDK-Version' => '0.8.14',
            'User-Agent' => 'ittybit/sdk/0.8.14',
        ];
        if ($version != null) {
            $defaultHeaders['ACCEPT_VERSION'] = $version;
        }

        $this->options = $options ?? [];
        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->automations = new AutomationsClient($this->client, $this->options);
        $this->files = new FilesClient($this->client, $this->options);
        $this->media = new MediaClient($this->client, $this->options);
        $this->tasks = new TasksClient($this->client, $this->options);
        $this->signatures = new SignaturesClient($this->client, $this->options);
    }

    /**
     * @param string $env
     * @param string $message
     * @return string
     */
    private function getFromEnvOrThrow(string $env, string $message): string
    {
        $value = getenv($env);
        return $value ? (string) $value : throw new Exception($message);
    }
}
