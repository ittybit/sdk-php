<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class MediaListResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $object
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var ?value-of<MediaListResponseDataItemKind> $kind
     */
    #[JsonProperty('kind')]
    private ?string $kind;

    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    private ?string $title;

    /**
     * @var ?string $alt
     */
    #[JsonProperty('alt')]
    private ?string $alt;

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
     * @var ?float $duration
     */
    #[JsonProperty('duration')]
    private ?float $duration;

    /**
     * @var array<MediaListResponseDataItemFilesItem> $files
     */
    #[JsonProperty('files'), ArrayType([MediaListResponseDataItemFilesItem::class])]
    private array $files;

    /**
     * @var array<string, mixed> $urls
     */
    #[JsonProperty('urls'), ArrayType(['string' => 'mixed'])]
    private array $urls;

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
     * @param array{
     *   id: string,
     *   object: string,
     *   files: array<MediaListResponseDataItemFilesItem>,
     *   urls: array<string, mixed>,
     *   created: DateTime,
     *   updated: DateTime,
     *   kind?: ?value-of<MediaListResponseDataItemKind>,
     *   title?: ?string,
     *   alt?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   duration?: ?float,
     *   background?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->kind = $values['kind'] ?? null;
        $this->title = $values['title'] ?? null;
        $this->alt = $values['alt'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->files = $values['files'];
        $this->urls = $values['urls'];
        $this->background = $values['background'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
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
     * @return ?value-of<MediaListResponseDataItemKind>
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?value-of<MediaListResponseDataItemKind> $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
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
     * @return ?string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @param ?string $value
     */
    public function setAlt(?string $value = null): self
    {
        $this->alt = $value;
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
     * @return array<MediaListResponseDataItemFilesItem>
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param array<MediaListResponseDataItemFilesItem> $value
     */
    public function setFiles(array $value): self
    {
        $this->files = $value;
        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param array<string, mixed> $value
     */
    public function setUrls(array $value): self
    {
        $this->urls = $value;
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
