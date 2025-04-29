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
    public ?string $url;

    /**
     * @var ?string $label Label for the media
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?string $folder Folder to store the media in
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?string $filename Filename for the media
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?string $title Title for the media
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?array<string, mixed> $metadata Additional metadata for the media
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?bool $async Whether to process the media asynchronously
     */
    #[JsonProperty('async')]
    public ?bool $async;

    /**
     * @var ?bool $empty Create an empty media placeholder
     */
    #[JsonProperty('empty')]
    public ?bool $empty;

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
}
