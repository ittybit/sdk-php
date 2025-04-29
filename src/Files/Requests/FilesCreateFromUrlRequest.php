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
    private string $url;

    /**
     * @var ?string $filename Optional desired filename. If not provided, it may be derived from the URL.
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?string $folder Folder path (optional)
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $mediaId Optional existing media ID to associate the file with.
     */
    #[JsonProperty('media_id')]
    private ?string $mediaId;

    /**
     * @var ?string $label Optional label for the file.
     */
    #[JsonProperty('label')]
    private ?string $label;

    /**
     * @var ?array<string, mixed> $metadata Optional user-defined key-value metadata.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?bool $async Whether to process the ingestion asynchronously.
     */
    #[JsonProperty('async')]
    private ?bool $async;

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

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $value
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param ?string $value
     */
    public function setFilename(?string $value = null): self
    {
        $this->filename = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getFolder(): ?string
    {
        return $this->folder;
    }

    /**
     * @param ?string $value
     */
    public function setFolder(?string $value = null): self
    {
        $this->folder = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    /**
     * @param ?string $value
     */
    public function setMediaId(?string $value = null): self
    {
        $this->mediaId = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param ?string $value
     */
    public function setLabel(?string $value = null): self
    {
        $this->label = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setMetadata(?array $value = null): self
    {
        $this->metadata = $value;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function getAsync(): ?bool
    {
        return $this->async;
    }

    /**
     * @param ?bool $value
     */
    public function setAsync(?bool $value = null): self
    {
        $this->async = $value;
        return $this;
    }
}
