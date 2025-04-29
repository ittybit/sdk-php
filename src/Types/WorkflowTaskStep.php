<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * A single task step definition within an automation workflow.
 */
class WorkflowTaskStep extends JsonSerializableType
{
    /**
     * @var value-of<WorkflowTaskStepKind> $kind The type of operation the task performs.
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $label Optional label for the output of this step.
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?string $format Output format (e.g., mp4, jpg)
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?int $width Output width
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $height Output height
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?string $resize Resize mode
     */
    #[JsonProperty('resize')]
    public ?string $resize;

    /**
     * @var ?int $quality Quality setting
     */
    #[JsonProperty('quality')]
    public ?int $quality;

    /**
     * @param array{
     *   kind: value-of<WorkflowTaskStepKind>,
     *   label?: ?string,
     *   format?: ?string,
     *   width?: ?int,
     *   height?: ?int,
     *   resize?: ?string,
     *   quality?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->label = $values['label'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->resize = $values['resize'] ?? null;
        $this->quality = $values['quality'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
