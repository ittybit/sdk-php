<?php

namespace Ittybit\Tasks\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Tasks\Types\TasksCreateRequestKind;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TasksCreateRequest extends JsonSerializableType
{
    /**
     * @var value-of<TasksCreateRequestKind> $kind The type of task to create.
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $url URL of the source file (required for 'ingest' kind unless file_id is used, can be used for others).
     */
    #[JsonProperty('url')]
    private ?string $url;

    /**
     * @var ?array<string, mixed> $input Task-specific input parameters depending on the kind of task.
     */
    #[JsonProperty('input'), ArrayType(['string' => 'mixed'])]
    private ?array $input;

    /**
     * @var ?string $fileId ID of an existing file to use as input (alternative to url).
     */
    #[JsonProperty('file_id')]
    private ?string $fileId;

    /**
     * @var ?array<array<string, mixed>> $workflow An array of task definition objects for a workflow.
     */
    #[JsonProperty('workflow'), ArrayType([['string' => 'mixed']])]
    private ?array $workflow;

    /**
     * @var ?string $webhookUrl An optional HTTPS URL to send a webhook notification to upon task completion or failure.
     */
    #[JsonProperty('webhook_url')]
    private ?string $webhookUrl;

    /**
     * @var ?string $filename Desired filename for the output (if applicable).
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?string $folder Desired output folder (if applicable).
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?string $format Output format (e.g., for video/image tasks).
     */
    #[JsonProperty('format')]
    private ?string $format;

    /**
     * @var ?int $width Output width (for video/image tasks).
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height Output height (for video/image tasks).
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?int $quality Output quality setting (e.g., for video/image tasks, 0-100).
     */
    #[JsonProperty('quality')]
    private ?int $quality;

    /**
     * @param array{
     *   kind: value-of<TasksCreateRequestKind>,
     *   url?: ?string,
     *   input?: ?array<string, mixed>,
     *   fileId?: ?string,
     *   workflow?: ?array<array<string, mixed>>,
     *   webhookUrl?: ?string,
     *   filename?: ?string,
     *   folder?: ?string,
     *   format?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   quality?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->url = $values['url'] ?? null;
        $this->input = $values['input'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->workflow = $values['workflow'] ?? null;
        $this->webhookUrl = $values['webhookUrl'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->folder = $values['folder'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->quality = $values['quality'] ?? null;
    }

    /**
     * @return value-of<TasksCreateRequestKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<TasksCreateRequestKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
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
     * @return ?array<string, mixed>
     */
    public function getInput(): ?array
    {
        return $this->input;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setInput(?array $value = null): self
    {
        $this->input = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    /**
     * @param ?string $value
     */
    public function setFileId(?string $value = null): self
    {
        $this->fileId = $value;
        return $this;
    }

    /**
     * @return ?array<array<string, mixed>>
     */
    public function getWorkflow(): ?array
    {
        return $this->workflow;
    }

    /**
     * @param ?array<array<string, mixed>> $value
     */
    public function setWorkflow(?array $value = null): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getWebhookUrl(): ?string
    {
        return $this->webhookUrl;
    }

    /**
     * @param ?string $value
     */
    public function setWebhookUrl(?string $value = null): self
    {
        $this->webhookUrl = $value;
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
    public function getQuality(): ?int
    {
        return $this->quality;
    }

    /**
     * @param ?int $value
     */
    public function setQuality(?int $value = null): self
    {
        $this->quality = $value;
        return $this;
    }
}
