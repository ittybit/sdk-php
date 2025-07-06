<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class WorkflowTaskStep extends JsonSerializableType
{
    /**
     * @var value-of<WorkflowTaskStepKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?string $format
     */
    #[JsonProperty('format')]
    private ?string $format;

    /**
     * @var ?float $start
     */
    #[JsonProperty('start')]
    private ?float $start;

    /**
     * @var ?float $end
     */
    #[JsonProperty('end')]
    private ?float $end;

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
     * @var ?string $fit
     */
    #[JsonProperty('fit')]
    private ?string $fit;

    /**
     * @var ?string $background
     */
    #[JsonProperty('background')]
    private ?string $background;

    /**
     * @var ?int $quality
     */
    #[JsonProperty('quality')]
    private ?int $quality;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    private ?array $next;

    /**
     * @param array{
     *   kind: value-of<WorkflowTaskStepKind>,
     *   ref?: ?string,
     *   format?: ?string,
     *   start?: ?float,
     *   end?: ?float,
     *   width?: ?int,
     *   height?: ?int,
     *   fit?: ?string,
     *   background?: ?string,
     *   quality?: ?int,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->ref = $values['ref'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->start = $values['start'] ?? null;
        $this->end = $values['end'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->fit = $values['fit'] ?? null;
        $this->background = $values['background'] ?? null;
        $this->quality = $values['quality'] ?? null;
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return value-of<WorkflowTaskStepKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<WorkflowTaskStepKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
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
     * @return ?float
     */
    public function getStart(): ?float
    {
        return $this->start;
    }

    /**
     * @param ?float $value
     */
    public function setStart(?float $value = null): self
    {
        $this->start = $value;
        return $this;
    }

    /**
     * @return ?float
     */
    public function getEnd(): ?float
    {
        return $this->end;
    }

    /**
     * @param ?float $value
     */
    public function setEnd(?float $value = null): self
    {
        $this->end = $value;
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
    public function getFit(): ?string
    {
        return $this->fit;
    }

    /**
     * @param ?string $value
     */
    public function setFit(?string $value = null): self
    {
        $this->fit = $value;
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

    /**
     * @return ?array<mixed>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<mixed> $value
     */
    public function setNext(?array $value = null): self
    {
        $this->next = $value;
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
