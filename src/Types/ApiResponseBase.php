<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ApiResponseBase extends JsonSerializableType
{
    /**
     * @var ?ApiResponseBaseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?ApiResponseBaseMeta $meta;

    /**
     * @var ?ApiResponseBaseLinks $links
     */
    #[JsonProperty('links')]
    private ?ApiResponseBaseLinks $links;

    /**
     * @param array{
     *   meta?: ?ApiResponseBaseMeta,
     *   links?: ?ApiResponseBaseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?ApiResponseBaseMeta
     */
    public function getMeta(): ?ApiResponseBaseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?ApiResponseBaseMeta $value
     */
    public function setMeta(?ApiResponseBaseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?ApiResponseBaseLinks
     */
    public function getLinks(): ?ApiResponseBaseLinks
    {
        return $this->links;
    }

    /**
     * @param ?ApiResponseBaseLinks $value
     */
    public function setLinks(?ApiResponseBaseLinks $value = null): self
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
