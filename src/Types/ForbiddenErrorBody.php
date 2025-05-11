<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ForbiddenErrorBody extends JsonSerializableType
{
    /**
     * @var ?ForbiddenErrorBodyMeta $meta
     */
    #[JsonProperty('meta')]
    private ?ForbiddenErrorBodyMeta $meta;

    /**
     * @var ?ForbiddenErrorBodyError $error
     */
    #[JsonProperty('error')]
    private ?ForbiddenErrorBodyError $error;

    /**
     * @param array{
     *   meta?: ?ForbiddenErrorBodyMeta,
     *   error?: ?ForbiddenErrorBodyError,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return ?ForbiddenErrorBodyMeta
     */
    public function getMeta(): ?ForbiddenErrorBodyMeta
    {
        return $this->meta;
    }

    /**
     * @param ?ForbiddenErrorBodyMeta $value
     */
    public function setMeta(?ForbiddenErrorBodyMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?ForbiddenErrorBodyError
     */
    public function getError(): ?ForbiddenErrorBodyError
    {
        return $this->error;
    }

    /**
     * @param ?ForbiddenErrorBodyError $value
     */
    public function setError(?ForbiddenErrorBodyError $value = null): self
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
