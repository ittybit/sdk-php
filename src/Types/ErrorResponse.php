<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ErrorResponse extends JsonSerializableType
{
    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?Error $error
     */
    #[JsonProperty('error')]
    private ?Error $error;

    /**
     * @param array{
     *   meta?: mixed,
     *   error?: ?Error,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return mixed
     */
    public function getMeta(): mixed
    {
        return $this->meta;
    }

    /**
     * @param mixed $value
     */
    public function setMeta(mixed $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?Error
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @param ?Error $value
     */
    public function setError(?Error $value = null): self
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
