<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class BadRequestErrorBody extends JsonSerializableType
{
    /**
     * @var ?BadRequestErrorBodyMeta $meta
     */
    #[JsonProperty('meta')]
    private ?BadRequestErrorBodyMeta $meta;

    /**
     * @var ?BadRequestErrorBodyError $error
     */
    #[JsonProperty('error')]
    private ?BadRequestErrorBodyError $error;

    /**
     * @param array{
     *   meta?: ?BadRequestErrorBodyMeta,
     *   error?: ?BadRequestErrorBodyError,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return ?BadRequestErrorBodyMeta
     */
    public function getMeta(): ?BadRequestErrorBodyMeta
    {
        return $this->meta;
    }

    /**
     * @param ?BadRequestErrorBodyMeta $value
     */
    public function setMeta(?BadRequestErrorBodyMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?BadRequestErrorBodyError
     */
    public function getError(): ?BadRequestErrorBodyError
    {
        return $this->error;
    }

    /**
     * @param ?BadRequestErrorBodyError $value
     */
    public function setError(?BadRequestErrorBodyError $value = null): self
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
