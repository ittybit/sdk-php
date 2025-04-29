<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;
use Ittybit\Core\Types\ArrayType;

class FilesGetResponseDataAnalysis extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $mediaId
     */
    #[JsonProperty('media_id')]
    public ?string $mediaId;

    /**
     * @var ?string $object
     */
    #[JsonProperty('object')]
    public ?string $object;

    /**
     * @var ?string $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?int $width
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?int $filesize
     */
    #[JsonProperty('filesize')]
    public ?int $filesize;

    /**
     * @var ?string $filename
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $created;

    /**
     * @var ?DateTime $updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updated;

    /**
     * @var ?float $duration
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?float $fps
     */
    #[JsonProperty('fps')]
    public ?float $fps;

    /**
     * @var ?string $folder
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('created_by')]
    public ?string $createdBy;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?array<string, mixed> $analysis
     */
    #[JsonProperty('analysis'), ArrayType(['string' => 'mixed'])]
    public ?array $analysis;

    /**
     * @var ?bool $original
     */
    #[JsonProperty('original')]
    public ?bool $original;

    /**
     * @param array{
     *   id?: ?string,
     *   mediaId?: ?string,
     *   object?: ?string,
     *   kind?: ?string,
     *   format?: ?string,
     *   type?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   filesize?: ?int,
     *   filename?: ?string,
     *   url?: ?string,
     *   created?: ?DateTime,
     *   updated?: ?DateTime,
     *   duration?: ?float,
     *   fps?: ?float,
     *   folder?: ?string,
     *   createdBy?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   analysis?: ?array<string, mixed>,
     *   original?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->mediaId = $values['mediaId'] ?? null;
        $this->object = $values['object'] ?? null;
        $this->kind = $values['kind'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->filesize = $values['filesize'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->created = $values['created'] ?? null;
        $this->updated = $values['updated'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->fps = $values['fps'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->analysis = $values['analysis'] ?? null;
        $this->original = $values['original'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
