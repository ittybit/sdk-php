<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class Media extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the media item.
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $object Object type, always 'media'.
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var string $orgId Organisation ID associated with the request.
     */
    #[JsonProperty('org_id')]
    private string $orgId;

    /**
     * @var string $projectId Project ID associated with the request.
     */
    #[JsonProperty('project_id')]
    private string $projectId;

    /**
     * @var bool $liveMode Indicates if the item is in live mode.
     */
    #[JsonProperty('live_mode')]
    private bool $liveMode;

    /**
     * @var value-of<MediaKind> $kind The primary kind of the media item, derived from its sources.
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var string $type The primary MIME type of the media item.
     */
    #[JsonProperty('type')]
    private string $type;

    /**
     * @var ?int $width Width of the primary source in pixels.
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height Height of the primary source in pixels.
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?float $duration Duration of the primary source in seconds.
     */
    #[JsonProperty('duration')]
    private ?float $duration;

    /**
     * @var ?int $filesize Combined file size of all sources in bytes.
     */
    #[JsonProperty('filesize')]
    private ?int $filesize;

    /**
     * @var array<MediaSourcesItem> $sources Array of source files associated with this media item.
     */
    #[JsonProperty('sources'), ArrayType([MediaSourcesItem::class])]
    private array $sources;

    /**
     * @var ?array<array<string, mixed>> $tracks Text tracks (e.g., subtitles, captions).
     */
    #[JsonProperty('tracks'), ArrayType([['string' => 'mixed']])]
    private ?array $tracks;

    /**
     * @var ?array<array<string, mixed>> $intelligence AI-generated analysis data.
     */
    #[JsonProperty('intelligence'), ArrayType([['string' => 'mixed']])]
    private ?array $intelligence;

    /**
     * @var string $original URL of the primary original source file.
     */
    #[JsonProperty('original')]
    private string $original;

    /**
     * @var ?string $placeholder Low-quality image placeholder (data URI).
     */
    #[JsonProperty('placeholder')]
    private ?string $placeholder;

    /**
     * @var ?string $background Dominant background color hex code.
     */
    #[JsonProperty('background')]
    private ?string $background;

    /**
     * @var ?string $folder The folder path containing the primary source file.
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $filename The filename of the primary source file.
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?array<string, mixed> $metadata User-defined key-value metadata for the media item.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var DateTime $created Timestamp when the media record was created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the media item was last updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @var value-of<MediaStatus> $status Processing status.
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   orgId: string,
     *   projectId: string,
     *   liveMode: bool,
     *   kind: value-of<MediaKind>,
     *   type: string,
     *   sources: array<MediaSourcesItem>,
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
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }

    /**
     * @param string $value
     */
    public function setOrgId(string $value): self
    {
        $this->orgId = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string $value
     */
    public function setProjectId(string $value): self
    {
        $this->projectId = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLiveMode(): bool
    {
        return $this->liveMode;
    }

    /**
     * @param bool $value
     */
    public function setLiveMode(bool $value): self
    {
        $this->liveMode = $value;
        return $this;
    }

    /**
     * @return value-of<MediaKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<MediaKind> $value
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
     * @return array<MediaSourcesItem>
     */
    public function getSources(): array
    {
        return $this->sources;
    }

    /**
     * @param array<MediaSourcesItem> $value
     */
    public function setSources(array $value): self
    {
        $this->sources = $value;
        return $this;
    }

    /**
     * @return ?array<array<string, mixed>>
     */
    public function getTracks(): ?array
    {
        return $this->tracks;
    }

    /**
     * @param ?array<array<string, mixed>> $value
     */
    public function setTracks(?array $value = null): self
    {
        $this->tracks = $value;
        return $this;
    }

    /**
     * @return ?array<array<string, mixed>>
     */
    public function getIntelligence(): ?array
    {
        return $this->intelligence;
    }

    /**
     * @param ?array<array<string, mixed>> $value
     */
    public function setIntelligence(?array $value = null): self
    {
        $this->intelligence = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginal(): string
    {
        return $this->original;
    }

    /**
     * @param string $value
     */
    public function setOriginal(string $value): self
    {
        $this->original = $value;
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
     * @return value-of<MediaStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<MediaStatus> $value
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
