<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;
use Ittybit\Core\Types\ArrayType;

/**
 * Represents a file stored in the system, including its metadata and source information.
 */
class File extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the file.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $mediaId Identifier for the parent media object.
     */
    #[JsonProperty('media_id')]
    public string $mediaId;

    /**
     * @var string $object Object type, typically 'source' or 'derivative'.
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<FileKind> $kind The general type of media.
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $format Specific file format/codec.
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $type MIME type.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?int $width Width in pixels (for image/video).
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Height in pixels (for image/video).
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?float $duration Duration in seconds (for audio/video).
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?float $fps Frames per second (for video).
     */
    #[JsonProperty('fps')]
    public ?float $fps;

    /**
     * @var int $filesize File size in bytes.
     */
    #[JsonProperty('filesize')]
    public int $filesize;

    /**
     * @var ?string $folder The folder path where the file is stored.
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var string $filename The name of the file.
     */
    #[JsonProperty('filename')]
    public string $filename;

    /**
     * @var string $url Publicly accessible URL for the file.
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?string $createdBy ID of the entity (e.g., task, user) that created this file.
     */
    #[JsonProperty('created_by')]
    public ?string $createdBy;

    /**
     * @var DateTime $created Timestamp when the file record was created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the file record was last updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    public DateTime $updated;

    /**
     * @var ?array<string, mixed> $metadata User-defined key-value metadata.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?array<string, mixed> $analysis System-generated analysis data.
     */
    #[JsonProperty('analysis'), ArrayType(['string' => 'mixed'])]
    public ?array $analysis;

    /**
     * @var ?bool $original Indicates if this is the originally uploaded file.
     */
    #[JsonProperty('original')]
    public ?bool $original;

    /**
     * @param array{
     *   id: string,
     *   mediaId: string,
     *   object: string,
     *   kind: value-of<FileKind>,
     *   format: string,
     *   type: string,
     *   filesize: int,
     *   filename: string,
     *   url: string,
     *   created: DateTime,
     *   updated: DateTime,
     *   width?: ?int,
     *   height?: ?int,
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
        array $values,
    ) {
        $this->id = $values['id'];
        $this->mediaId = $values['mediaId'];
        $this->object = $values['object'];
        $this->kind = $values['kind'];
        $this->format = $values['format'];
        $this->type = $values['type'];
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->fps = $values['fps'] ?? null;
        $this->filesize = $values['filesize'];
        $this->folder = $values['folder'] ?? null;
        $this->filename = $values['filename'];
        $this->url = $values['url'];
        $this->createdBy = $values['createdBy'] ?? null;
        $this->created = $values['created'];
        $this->updated = $values['updated'];
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
