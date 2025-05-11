<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class UnauthorizedErrorBody extends JsonSerializableType
{
    /**
     * @var ?UnauthorizedErrorBodyMeta $meta
     */
    #[JsonProperty('meta')]
    private ?UnauthorizedErrorBodyMeta $meta;

    /**
     * @var ?UnauthorizedErrorBodyError $error
     */
    #[JsonProperty('error')]
    private ?UnauthorizedErrorBodyError $error;

    /**
     * @param array{
     *   meta?: ?UnauthorizedErrorBodyMeta,
     *   error?: ?UnauthorizedErrorBodyError,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return ?UnauthorizedErrorBodyMeta
     */
    public function getMeta(): ?UnauthorizedErrorBodyMeta
    {
        return $this->meta;
    }

    /**
     * @param ?UnauthorizedErrorBodyMeta $value
     */
    public function setMeta(?UnauthorizedErrorBodyMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?UnauthorizedErrorBodyError
     */
    public function getError(): ?UnauthorizedErrorBodyError
    {
        return $this->error;
    }

    /**
     * @param ?UnauthorizedErrorBodyError $value
     */
    public function setError(?UnauthorizedErrorBodyError $value = null): self
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
