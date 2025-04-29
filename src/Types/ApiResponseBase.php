<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Base structure for standard API responses.
 */
class ApiResponseBase extends JsonSerializableType
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    private ?Meta $meta;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
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
     * @return ?Links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * @param ?Links $value
     */
    public function setLinks(?Links $value = null): self
    {
        $this->links = $value;
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
