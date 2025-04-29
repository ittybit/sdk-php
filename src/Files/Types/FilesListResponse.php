<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Types\Meta;
use Ittybit\Types\Links;

class FilesListResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?array<mixed> $data List of file objects
     */
    #[JsonProperty('data'), ArrayType(['mixed'])]
    private ?array $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?array<mixed>,
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
     * @return ?array<mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<mixed> $value
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
