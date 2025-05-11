<?php

namespace Ittybit\Example\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class GetApiExampleResponse extends JsonSerializableType
{
    /**
     * @var ?GetApiExampleResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?GetApiExampleResponseMeta $meta;

    /**
     * @var ?array<string, mixed> $data
     */
    #[JsonProperty('data'), ArrayType(['string' => 'mixed'])]
    private ?array $data;

    /**
     * @param array{
     *   meta?: ?GetApiExampleResponseMeta,
     *   data?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return ?GetApiExampleResponseMeta
     */
    public function getMeta(): ?GetApiExampleResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?GetApiExampleResponseMeta $value
     */
    public function setMeta(?GetApiExampleResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<string, mixed> $value
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
