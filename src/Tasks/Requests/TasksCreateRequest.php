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
    public string $kind;

    /**
     * @var ?string $url URL of the source file (required for 'ingest' kind unless file_id is used, can be used for others).
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?array<string, mixed> $input Task-specific input parameters depending on the kind of task.
     */
    #[JsonProperty('input'), ArrayType(['string' => 'mixed'])]
    public ?array $input;

    /**
     * @var ?string $fileId ID of an existing file to use as input (alternative to url).
     */
    #[JsonProperty('file_id')]
    public ?string $fileId;

    /**
     * @var ?array<array<string, mixed>> $workflow An array of task definition objects for a workflow.
     */
    #[JsonProperty('workflow'), ArrayType([['string' => 'mixed']])]
    public ?array $workflow;

    /**
     * @var ?string $webhookUrl An optional HTTPS URL to send a webhook notification to upon task completion or failure.
     */
    #[JsonProperty('webhook_url')]
    public ?string $webhookUrl;

    /**
     * @var ?string $filename Desired filename for the output (if applicable).
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?string $folder Desired output folder (if applicable).
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?string $format Output format (e.g., for video/image tasks).
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?int $width Output width (for video/image tasks).
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Output height (for video/image tasks).
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?int $quality Output quality setting (e.g., for video/image tasks, 0-100).
     */
    #[JsonProperty('quality')]
    public ?int $quality;

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
}
