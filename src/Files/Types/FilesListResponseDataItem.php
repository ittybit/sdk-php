<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class FilesListResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $mediaId
     */
    #[JsonProperty('media_id')]
    private string $mediaId;

    /**
     * @var value-of<FilesListResponseDataItemObject> $object
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var value-of<FilesListResponseDataItemKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    private string $type;

    /**
     * @var ?string $codec
     */
    #[JsonProperty('codec')]
    private ?string $codec;

    /**
     * @var ?string $container
     */
    #[JsonProperty('container')]
    private ?string $container;

    /**
     * @var ?int $width
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?string $orientation
     */
    #[JsonProperty('orientation')]
    private ?string $orientation;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    private ?float $rotation;

    /**
     * @var ?bool $transparency
     */
    #[JsonProperty('transparency')]
    private ?bool $transparency;

    /**
     * @var ?bool $animated
     */
    #[JsonProperty('animated')]
    private ?bool $animated;

    /**
     * @var ?int $frames
     */
    #[JsonProperty('frames')]
    private ?int $frames;

    /**
     * @var ?float $duration
     */
    #[JsonProperty('duration')]
    private ?float $duration;

    /**
     * @var ?float $fps
     */
    #[JsonProperty('fps')]
    private ?float $fps;

    /**
     * @var int $filesize
     */
    #[JsonProperty('filesize')]
    private int $filesize;

    /**
     * @var ?int $bitrate
     */
    #[JsonProperty('bitrate')]
    private ?int $bitrate;

    /**
     * @var ?string $language
     */
    #[JsonProperty('language')]
    private ?string $language;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    private ?string $label;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?string $folder
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $filename
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    private string $url;

    /**
     * @var ?string $placeholder
     */
    #[JsonProperty('placeholder')]
    private ?string $placeholder;

    /**
     * @var ?string $background
     */
    #[JsonProperty('background')]
    private ?string $background;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?bool $original
     */
    #[JsonProperty('original')]
    private ?bool $original;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('created_by')]
    private ?string $createdBy;

    /**
     * @var DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @var value-of<FilesListResponseDataItemStatus> $status
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @param array{
     *   id: string,
     *   mediaId: string,
     *   object: value-of<FilesListResponseDataItemObject>,
     *   kind: value-of<FilesListResponseDataItemKind>,
     *   type: string,
     *   filesize: int,
     *   url: string,
     *   created: DateTime,
     *   updated: DateTime,
     *   status: value-of<FilesListResponseDataItemStatus>,
     *   codec?: ?string,
     *   container?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   orientation?: ?string,
     *   rotation?: ?float,
     *   transparency?: ?bool,
     *   animated?: ?bool,
     *   frames?: ?int,
     *   duration?: ?float,
     *   fps?: ?float,
     *   bitrate?: ?int,
     *   language?: ?string,
     *   label?: ?string,
     *   ref?: ?string,
     *   folder?: ?string,
     *   filename?: ?string,
     *   placeholder?: ?string,
     *   background?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   original?: ?bool,
     *   createdBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->mediaId = $values['mediaId'];
        $this->object = $values['object'];
        $this->kind = $values['kind'];
        $this->type = $values['type'];
        $this->codec = $values['codec'] ?? null;
        $this->container = $values['container'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->orientation = $values['orientation'] ?? null;
        $this->rotation = $values['rotation'] ?? null;
        $this->transparency = $values['transparency'] ?? null;
        $this->animated = $values['animated'] ?? null;
        $this->frames = $values['frames'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->fps = $values['fps'] ?? null;
        $this->filesize = $values['filesize'];
        $this->bitrate = $values['bitrate'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->ref = $values['ref'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->url = $values['url'];
        $this->placeholder = $values['placeholder'] ?? null;
        $this->background = $values['background'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->original = $values['original'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->created = $values['created'];
        $this->updated = $values['updated'];
        $this->status = $values['status'];
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
    public function getMediaId(): string
    {
        return $this->mediaId;
    }

    /**
     * @param string $value
     */
    public function setMediaId(string $value): self
    {
        $this->mediaId = $value;
        return $this;
    }

    /**
     * @return value-of<FilesListResponseDataItemObject>
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param value-of<FilesListResponseDataItemObject> $value
     */
    public function setObject(string $value): self
    {
        $this->object = $value;
        return $this;
    }

    /**
     * @return value-of<FilesListResponseDataItemKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<FilesListResponseDataItemKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
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
     * @return ?string
     */
    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    /**
     * @param ?string $value
     */
    public function setOrientation(?string $value = null): self
    {
        $this->orientation = $value;
        return $this;
    }

    /**
     * @return ?float
     */
    public function getRotation(): ?float
    {
        return $this->rotation;
    }

    /**
     * @param ?float $value
     */
    public function setRotation(?float $value = null): self
    {
        $this->rotation = $value;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function getTransparency(): ?bool
    {
        return $this->transparency;
    }

    /**
     * @param ?bool $value
     */
    public function setTransparency(?bool $value = null): self
    {
        $this->transparency = $value;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function getAnimated(): ?bool
    {
        return $this->animated;
    }

    /**
     * @param ?bool $value
     */
    public function setAnimated(?bool $value = null): self
    {
        $this->animated = $value;
        return $this;
    }

    /**
     * @return ?int
     */
    public function getFrames(): ?int
    {
        return $this->frames;
    }

    /**
     * @param ?int $value
     */
    public function setFrames(?int $value = null): self
    {
        $this->frames = $value;
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
     * @return ?string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param ?string $value
     */
    public function setLanguage(?string $value = null): self
    {
        $this->language = $value;
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
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @param ?string $value
     */
    public function setRef(?string $value = null): self
    {
        $this->ref = $value;
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
    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    /**
     * @param ?string $value
     */
    public function setPlaceholder(?string $value = null): self
    {
        $this->placeholder = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    /**
     * @param ?string $value
     */
    public function setBackground(?string $value = null): self
    {
        $this->background = $value;
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
    public function getOriginal(): ?bool
    {
        return $this->original;
    }

    /**
     * @param ?bool $value
     */
    public function setOriginal(?bool $value = null): self
    {
        $this->original = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param ?string $value
     */
    public function setCreatedBy(?string $value = null): self
    {
        $this->createdBy = $value;
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
     * @return value-of<FilesListResponseDataItemStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<FilesListResponseDataItemStatus> $value
     */
    public function setStatus(string $value): self
    {
        $this->status = $value;
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
