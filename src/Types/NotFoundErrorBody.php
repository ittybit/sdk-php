<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class NotFoundErrorBody extends JsonSerializableType
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    private ?Meta $meta;

    /**
     * @var ?string $error Error message
     */
    #[JsonProperty('error')]
    private ?string $error;

    /**
     * @param array{
     *   meta?: ?Meta,
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
     * @return ?Meta
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * @param ?Meta $value
     */
    public function setMeta(?Meta $value = null): self
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
