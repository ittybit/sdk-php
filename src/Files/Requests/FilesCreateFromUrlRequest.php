<?php

namespace Ittybit\Files\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class FilesCreateFromUrlRequest extends JsonSerializableType
{
    /**
     * @var string $url The publicly accessible URL of the file to ingest.
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?string $filename Optional desired filename. If not provided, it may be derived from the URL.
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?string $folder Folder path (optional)
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?string $mediaId Optional existing media ID to associate the file with.
     */
    #[JsonProperty('media_id')]
    public ?string $mediaId;

    /**
     * @var ?string $label Optional label for the file.
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?array<string, mixed> $metadata Optional user-defined key-value metadata.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?bool $async Whether to process the ingestion asynchronously.
     */
    #[JsonProperty('async')]
    public ?bool $async;

    /**
     * @param array{
     *   url: string,
     *   filename?: ?string,
     *   folder?: ?string,
     *   mediaId?: ?string,
     *   label?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   async?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->filename = $values['filename'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->mediaId = $values['mediaId'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->async = $values['async'] ?? null;
    }
}
