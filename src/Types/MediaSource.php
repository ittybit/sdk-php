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
    private string $id;

    /**
     * @var string $object Object type, always 'source' for media sources.
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var value-of<MediaSourceKind> $kind The general type of media (e.g., video, image).
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var string $format Specific file format (e.g., mp4, webm, jpg).
     */
    #[JsonProperty('format')]
    private string $format;

    /**
     * @var string $type MIME type, potentially including codec info.
     */
    #[JsonProperty('type')]
    private string $type;

    /**
     * @var ?string $container File container format.
     */
    #[JsonProperty('container')]
    private ?string $container;

    /**
     * @var ?string $codec Primary codec.
     */
    #[JsonProperty('codec')]
    private ?string $codec;

    /**
     * @var ?int $width Width in pixels.
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height Height in pixels.
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?value-of<MediaSourceOrientation> $orientation Visual orientation.
     */
    #[JsonProperty('orientation')]
    private ?string $orientation;

    /**
     * @var ?float $duration Duration in seconds.
     */
    #[JsonProperty('duration')]
    private ?float $duration;

    /**
     * @var ?float $fps Frames per second.
     */
    #[JsonProperty('fps')]
    private ?float $fps;

    /**
     * @var int $filesize Source file size in bytes.
     */
    #[JsonProperty('filesize')]
    private int $filesize;

    /**
     * @var ?int $bitrate Average bitrate in bits per second.
     */
    #[JsonProperty('bitrate')]
    private ?int $bitrate;

    /**
     * @var bool $original Is this the originally ingested file?
     */
    #[JsonProperty('original')]
    private bool $original;

    /**
     * @var ?string $label User-defined label for this source.
     */
    #[JsonProperty('label')]
    private ?string $label;

    /**
     * @var string $src URL of the source file.
     */
    #[JsonProperty('src')]
    private string $src;

    /**
     * @var ?string $folder The folder path.
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var string $filename The filename of the source file.
     */
    #[JsonProperty('filename')]
    private string $filename;

    /**
     * @var DateTime $created Timestamp created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated Timestamp updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $value
     */
    public function setId(string $value): self
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $value
     */
    public function setObject(string $value): self
    {
        $this->object = $value;
        return $this;
    }

    /**
     * @return value-of<MediaSourceKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<MediaSourceKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $value
     */
    public function setFormat(string $value): self
    {
        $this->format = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $value
     */
    public function setType(string $value): self
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }

    /**
     * @param ?string $value
     */
    public function setContainer(?string $value = null): self
    {
        $this->container = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCodec(): ?string
    {
        return $this->codec;
    }

    /**
     * @param ?string $value
     */
    public function setCodec(?string $value = null): self
    {
        $this->codec = $value;
        return $this;
    }

    /**
     * @return ?int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param ?int $value
     */
    public function setWidth(?int $value = null): self
    {
        $this->width = $value;
        return $this;
    }

    /**
     * @return ?int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param ?int $value
     */
    public function setHeight(?int $value = null): self
    {
        $this->height = $value;
        return $this;
    }

    /**
     * @return ?value-of<MediaSourceOrientation>
     */
    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    /**
     * @param ?value-of<MediaSourceOrientation> $value
     */
    public function setOrientation(?string $value = null): self
    {
        $this->orientation = $value;
        return $this;
    }

    /**
     * @return ?float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param ?float $value
     */
    public function setDuration(?float $value = null): self
    {
        $this->duration = $value;
        return $this;
    }

    /**
     * @return ?float
     */
    public function getFps(): ?float
    {
        return $this->fps;
    }

    /**
     * @param ?float $value
     */
    public function setFps(?float $value = null): self
    {
        $this->fps = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilesize(): int
    {
        return $this->filesize;
    }

    /**
     * @param int $value
     */
    public function setFilesize(int $value): self
    {
        $this->filesize = $value;
        return $this;
    }

    /**
     * @return ?int
     */
    public function getBitrate(): ?int
    {
        return $this->bitrate;
    }

    /**
     * @param ?int $value
     */
    public function setBitrate(?int $value = null): self
    {
        $this->bitrate = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOriginal(): bool
    {
        return $this->original;
    }

    /**
     * @param bool $value
     */
    public function setOriginal(bool $value): self
    {
        $this->original = $value;
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
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @param string $value
     */
    public function setSrc(string $value): self
    {
        $this->src = $value;
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
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $value
     */
    public function setFilename(string $value): self
    {
        $this->filename = $value;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $value
     */
    public function setCreated(DateTime $value): self
    {
        $this->created = $value;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated(): DateTime
    {
        return $this->updated;
    }

    /**
     * @param DateTime $value
     */
    public function setUpdated(DateTime $value): self
    {
        $this->updated = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
