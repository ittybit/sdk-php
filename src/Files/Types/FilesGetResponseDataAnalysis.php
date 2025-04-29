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
    private ?string $id;

    /**
     * @var ?string $mediaId
     */
    #[JsonProperty('media_id')]
    private ?string $mediaId;

    /**
     * @var ?string $object
     */
    #[JsonProperty('object')]
    private ?string $object;

    /**
     * @var ?string $kind
     */
    #[JsonProperty('kind')]
    private ?string $kind;

    /**
     * @var ?string $format
     */
    #[JsonProperty('format')]
    private ?string $format;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    private ?string $type;

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
     * @var ?int $filesize
     */
    #[JsonProperty('filesize')]
    private ?int $filesize;

    /**
     * @var ?string $filename
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    private ?string $url;

    /**
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private ?DateTime $created;

    /**
     * @var ?DateTime $updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private ?DateTime $updated;

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
     * @var ?string $folder
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('created_by')]
    private ?string $createdBy;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?array<string, mixed> $analysis
     */
    #[JsonProperty('analysis'), ArrayType(['string' => 'mixed'])]
    private ?array $analysis;

    /**
     * @var ?bool $original
     */
    #[JsonProperty('original')]
    private ?bool $original;

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
     * @return ?string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param ?string $value
     */
    public function setId(?string $value = null): self
    {
        $this->id = $value;
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
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * @param ?string $value
     */
    public function setObject(?string $value = null): self
    {
        $this->object = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?string $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param ?string $value
     */
    public function setFormat(?string $value = null): self
    {
        $this->format = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param ?string $value
     */
    public function setType(?string $value = null): self
    {
        $this->type = $value;
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
     * @return ?int
     */
    public function getFilesize(): ?int
    {
        return $this->filesize;
    }

    /**
     * @param ?int $value
     */
    public function setFilesize(?int $value = null): self
    {
        $this->filesize = $value;
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
     * @return ?DateTime
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param ?DateTime $value
     */
    public function setCreated(?DateTime $value = null): self
    {
        $this->created = $value;
        return $this;
    }

    /**
     * @return ?DateTime
     */
    public function getUpdated(): ?DateTime
    {
        return $this->updated;
    }

    /**
     * @param ?DateTime $value
     */
    public function setUpdated(?DateTime $value = null): self
    {
        $this->updated = $value;
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
     * @return ?array<string, mixed>
     */
    public function getAnalysis(): ?array
    {
        return $this->analysis;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setAnalysis(?array $value = null): self
    {
        $this->analysis = $value;
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
