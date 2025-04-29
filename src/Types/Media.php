<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

/**
 * Represents a media item, which can contain multiple source files and associated data.
 */
class Media extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the media item.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $object Object type, always 'media'.
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var string $orgId Organisation ID associated with the request.
     */
    #[JsonProperty('org_id')]
    public string $orgId;

    /**
     * @var string $projectId Project ID associated with the request.
     */
    #[JsonProperty('project_id')]
    public string $projectId;

    /**
     * @var bool $liveMode Indicates if the item is in live mode.
     */
    #[JsonProperty('live_mode')]
    public bool $liveMode;

    /**
     * @var value-of<MediaKind> $kind The primary kind of the media item, derived from its sources.
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $type The primary MIME type of the media item.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?int $width Width of the primary source in pixels.
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Height of the primary source in pixels.
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?float $duration Duration of the primary source in seconds.
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?int $filesize Combined file size of all sources in bytes.
     */
    #[JsonProperty('filesize')]
    public ?int $filesize;

    /**
     * @var array<MediaSource> $sources Array of source files associated with this media item.
     */
    #[JsonProperty('sources'), ArrayType([MediaSource::class])]
    public array $sources;

    /**
     * @var ?array<array<string, mixed>> $tracks Text tracks (e.g., subtitles, captions).
     */
    #[JsonProperty('tracks'), ArrayType([['string' => 'mixed']])]
    public ?array $tracks;

    /**
     * @var ?array<array<string, mixed>> $intelligence AI-generated analysis data.
     */
    #[JsonProperty('intelligence'), ArrayType([['string' => 'mixed']])]
    public ?array $intelligence;

    /**
     * @var string $original URL of the primary original source file.
     */
    #[JsonProperty('original')]
    public string $original;

    /**
     * @var ?string $placeholder Low-quality image placeholder (data URI).
     */
    #[JsonProperty('placeholder')]
    public ?string $placeholder;

    /**
     * @var ?string $background Dominant background color hex code.
     */
    #[JsonProperty('background')]
    public ?string $background;

    /**
     * @var ?string $folder The folder path containing the primary source file.
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?string $filename The filename of the primary source file.
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?array<string, mixed> $metadata User-defined key-value metadata for the media item.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var DateTime $created Timestamp when the media record was created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the media item was last updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    public DateTime $updated;

    /**
     * @var value-of<MediaStatus> $status Processing status.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   orgId: string,
     *   projectId: string,
     *   liveMode: bool,
     *   kind: value-of<MediaKind>,
     *   type: string,
     *   sources: array<MediaSource>,
     *   original: string,
     *   created: DateTime,
     *   updated: DateTime,
     *   status: value-of<MediaStatus>,
     *   width?: ?int,
     *   height?: ?int,
     *   duration?: ?float,
     *   filesize?: ?int,
     *   tracks?: ?array<array<string, mixed>>,
     *   intelligence?: ?array<array<string, mixed>>,
     *   placeholder?: ?string,
     *   background?: ?string,
     *   folder?: ?string,
     *   filename?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->orgId = $values['orgId'];
        $this->projectId = $values['projectId'];
        $this->liveMode = $values['liveMode'];
        $this->kind = $values['kind'];
        $this->type = $values['type'];
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->filesize = $values['filesize'] ?? null;
        $this->sources = $values['sources'];
        $this->tracks = $values['tracks'] ?? null;
        $this->intelligence = $values['intelligence'] ?? null;
        $this->original = $values['original'];
        $this->placeholder = $values['placeholder'] ?? null;
        $this->background = $values['background'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->created = $values['created'];
        $this->updated = $values['updated'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
