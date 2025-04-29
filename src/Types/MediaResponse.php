<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for single Media responses.
 */
class MediaResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?Media $data
     */
    #[JsonProperty('data')]
    private ?Media $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?Media,
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
     * @return ?Media
     */
    public function getData(): ?Media
    {
        return $this->data;
    }

    /**
     * @param ?Media $value
     */
    public function setData(?Media $value = null): self
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
