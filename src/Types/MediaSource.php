<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;

/**
 * Represents a source file associated with a media item.
 */
class MediaSource extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the source file.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $object Object type, always 'source' for media sources.
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var value-of<MediaSourceKind> $kind The general type of media (e.g., video, image).
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $format Specific file format (e.g., mp4, webm, jpg).
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $type MIME type, potentially including codec info.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $container File container format.
     */
    #[JsonProperty('container')]
    public ?string $container;

    /**
     * @var ?string $codec Primary codec.
     */
    #[JsonProperty('codec')]
    public ?string $codec;

    /**
     * @var ?int $width Width in pixels.
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Height in pixels.
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?value-of<MediaSourceOrientation> $orientation Visual orientation.
     */
    #[JsonProperty('orientation')]
    public ?string $orientation;

    /**
     * @var ?float $duration Duration in seconds.
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?float $fps Frames per second.
     */
    #[JsonProperty('fps')]
    public ?float $fps;

    /**
     * @var int $filesize Source file size in bytes.
     */
    #[JsonProperty('filesize')]
    public int $filesize;

    /**
     * @var ?int $bitrate Average bitrate in bits per second.
     */
    #[JsonProperty('bitrate')]
    public ?int $bitrate;

    /**
     * @var bool $original Is this the originally ingested file?
     */
    #[JsonProperty('original')]
    public bool $original;

    /**
     * @var ?string $label User-defined label for this source.
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var string $src URL of the source file.
     */
    #[JsonProperty('src')]
    public string $src;

    /**
     * @var ?string $folder The folder path.
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var string $filename The filename of the source file.
     */
    #[JsonProperty('filename')]
    public string $filename;

    /**
     * @var DateTime $created Timestamp created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public DateTime $created;

    /**
     * @var DateTime $updated Timestamp updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    public DateTime $updated;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   kind: value-of<MediaSourceKind>,
     *   format: string,
     *   type: string,
     *   filesize: int,
     *   original: bool,
     *   src: string,
     *   filename: string,
     *   created: DateTime,
     *   updated: DateTime,
     *   container?: ?string,
     *   codec?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   orientation?: ?value-of<MediaSourceOrientation>,
     *   duration?: ?float,
     *   fps?: ?float,
     *   bitrate?: ?int,
     *   label?: ?string,
     *   folder?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->kind = $values['kind'];
        $this->format = $values['format'];
        $this->type = $values['type'];
        $this->container = $values['container'] ?? null;
        $this->codec = $values['codec'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->orientation = $values['orientation'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->fps = $values['fps'] ?? null;
        $this->filesize = $values['filesize'];
        $this->bitrate = $values['bitrate'] ?? null;
        $this->original = $values['original'];
        $this->label = $values['label'] ?? null;
        $this->src = $values['src'];
        $this->folder = $values['folder'] ?? null;
        $this->filename = $values['filename'];
        $this->created = $values['created'];
        $this->updated = $values['updated'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
