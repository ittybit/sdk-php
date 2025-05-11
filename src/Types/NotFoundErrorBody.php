<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class NotFoundErrorBody extends JsonSerializableType
{
    /**
     * @var ?NotFoundErrorBodyMeta $meta
     */
    #[JsonProperty('meta')]
    private ?NotFoundErrorBodyMeta $meta;

    /**
     * @var ?NotFoundErrorBodyError $error
     */
    #[JsonProperty('error')]
    private ?NotFoundErrorBodyError $error;

    /**
     * @param array{
     *   meta?: ?NotFoundErrorBodyMeta,
     *   error?: ?NotFoundErrorBodyError,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return ?NotFoundErrorBodyMeta
     */
    public function getMeta(): ?NotFoundErrorBodyMeta
    {
        return $this->meta;
    }

    /**
     * @param ?NotFoundErrorBodyMeta $value
     */
    public function setMeta(?NotFoundErrorBodyMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?NotFoundErrorBodyError
     */
    public function getError(): ?NotFoundErrorBodyError
    {
        return $this->error;
    }

    /**
     * @param ?NotFoundErrorBodyError $value
     */
    public function setError(?NotFoundErrorBodyError $value = null): self
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
