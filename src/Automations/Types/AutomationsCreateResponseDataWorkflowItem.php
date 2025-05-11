<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsCreateResponseDataWorkflowItem extends JsonSerializableType
{
    /**
     * @var value-of<AutomationsCreateResponseDataWorkflowItemKind> $kind The type of operation the task performs.
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $label Optional label for the output of this step.
     */
    #[JsonProperty('label')]
    private ?string $label;

    /**
     * @var ?string $format Output format (e.g., mp4, jpg)
     */
    #[JsonProperty('format')]
    private ?string $format;

    /**
     * @var ?int $width Output width
     */
    #[JsonProperty('width')]
    private ?int $width;

    /**
     * @var ?int $height Output height
     */
    #[JsonProperty('height')]
    private ?int $height;

    /**
     * @var ?string $resize Resize mode
     */
    #[JsonProperty('resize')]
    private ?string $resize;

    /**
     * @var ?int $quality Quality setting
     */
    #[JsonProperty('quality')]
    private ?int $quality;

    /**
     * @param array{
     *   kind: value-of<AutomationsCreateResponseDataWorkflowItemKind>,
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
     * @return value-of<AutomationsCreateResponseDataWorkflowItemKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<AutomationsCreateResponseDataWorkflowItemKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
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
     * @return ?string
     */
    public function getResize(): ?string
    {
        return $this->resize;
    }

    /**
     * @param ?string $value
     */
    public function setResize(?string $value = null): self
    {
        $this->resize = $value;
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
