<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

/**
 * Standard wrapper for Media list responses.
 */
class MediaListResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?array<Media> $data
     */
    #[JsonProperty('data'), ArrayType([Media::class])]
    private ?array $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?array<Media>,
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
     * @return ?array<Media>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<Media> $value
     */
    public function setData(?array $value = null): self
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
