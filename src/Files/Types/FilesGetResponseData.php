<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;
use Ittybit\Core\Types\ArrayType;

class FilesGetResponseData extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the file.
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $mediaId Identifier for the parent media object.
     */
    #[JsonProperty('media_id')]
    private string $mediaId;

    /**
     * @var string $object Object type, typically 'source' or 'derivative'.
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var value-of<FilesGetResponseDataKind> $kind The general type of media.
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var string $format Specific file format/codec.
     */
    #[JsonProperty('format')]
    private string $format;

    /**
     * @var string $type MIME type.
     */
    #[JsonProperty('type')]
    private string $type;

    /**
     * @var ?int $width Width in pixels (for image/video).
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height Height in pixels (for image/video).
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?float $duration Duration in seconds (for audio/video).
     */
    #[JsonProperty('duration')]
    private ?float $duration;

    /**
     * @var ?float $fps Frames per second (for video).
     */
    #[JsonProperty('fps')]
    private ?float $fps;

    /**
     * @var int $filesize File size in bytes.
     */
    #[JsonProperty('filesize')]
    private int $filesize;

    /**
     * @var ?string $folder The folder path where the file is stored.
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var string $filename The name of the file.
     */
    #[JsonProperty('filename')]
    private string $filename;

    /**
     * @var string $url Publicly accessible URL for the file.
     */
    #[JsonProperty('url')]
    private string $url;

    /**
     * @var ?string $createdBy ID of the entity (e.g., task, user) that created this file.
     */
    #[JsonProperty('created_by')]
    private ?string $createdBy;

    /**
     * @var DateTime $created Timestamp when the file record was created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the file record was last updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @var ?array<string, mixed> $metadata User-defined key-value metadata.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?array<string, mixed> $analysis System-generated analysis data.
     */
    #[JsonProperty('analysis'), ArrayType(['string' => 'mixed'])]
    private ?array $analysis;

    /**
     * @var ?bool $original Indicates if this is the originally uploaded file.
     */
    #[JsonProperty('original')]
    private ?bool $original;

    /**
     * @param array{
     *   id: string,
     *   mediaId: string,
     *   object: string,
     *   kind: value-of<FilesGetResponseDataKind>,
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
     * @return value-of<FilesGetResponseDataKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<FilesGetResponseDataKind> $value
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
