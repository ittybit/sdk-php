<?php

namespace Ittybit\Media\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class MediaCreateRequest extends JsonSerializableType
{
    /**
     * @var ?string $url URL of the media file to ingest. Required unless 'empty' is true.
     */
    #[JsonProperty('url')]
    private ?string $url;

    /**
     * @var ?string $label Label for the media
     */
    #[JsonProperty('label')]
    private ?string $label;

    /**
     * @var ?string $folder Folder to store the media in
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $filename Filename for the media
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?string $title Title for the media
     */
    #[JsonProperty('title')]
    private ?string $title;

    /**
     * @var ?array<string, mixed> $metadata Additional metadata for the media
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?bool $async Whether to process the media asynchronously
     */
    #[JsonProperty('async')]
    private ?bool $async;

    /**
     * @var ?bool $empty Create an empty media placeholder
     */
    #[JsonProperty('empty')]
    private ?bool $empty;

    /**
     * @param array{
     *   url?: ?string,
     *   label?: ?string,
     *   folder?: ?string,
     *   filename?: ?string,
     *   title?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   async?: ?bool,
     *   empty?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->url = $values['url'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->title = $values['title'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->async = $values['async'] ?? null;
        $this->empty = $values['empty'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param ?string $value
     */
    public function setUrl(?string $value = null): self
    {
        $this->url = $value;
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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param ?string $value
     */
    public function setTitle(?string $value = null): self
    {
        $this->title = $value;
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

    /**
     * @return ?bool
     */
    public function getEmpty(): ?bool
    {
        return $this->empty;
    }

    /**
     * @param ?bool $value
     */
    public function setEmpty(?bool $value = null): self
    {
        $this->empty = $value;
        return $this;
    }
}
