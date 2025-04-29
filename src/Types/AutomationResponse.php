<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for single Automation responses.
 */
class AutomationResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?Automation $data
     */
    #[JsonProperty('data')]
    private ?Automation $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?Automation,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return ?Automation
     */
    public function getData(): ?Automation
    {
        return $this->data;
    }

    /**
     * @param ?Automation $value
     */
    public function setData(?Automation $value = null): self
    {
        $this->data = $value;
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
