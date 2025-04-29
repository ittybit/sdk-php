<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class BadRequestErrorBody extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $meta
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    private ?array $meta;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    private ?string $error;

    /**
     * @param array{
     *   meta?: ?array<string, mixed>,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getMeta(): ?array
    {
        return $this->meta;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setMeta(?array $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param ?string $value
     */
    public function setError(?string $value = null): self
    {
        $this->error = $value;
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
