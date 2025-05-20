<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class MediaListResponse extends JsonSerializableType
{
    /**
     * @var ?MetaList $meta
     */
    #[JsonProperty('meta')]
    private ?MetaList $meta;

    /**
     * @var ?array<Media> $data
     */
    #[JsonProperty('data'), ArrayType([Media::class])]
    private ?array $data;

    /**
     * @var ?LinksList $links
     */
    #[JsonProperty('links')]
    private ?LinksList $links;

    /**
     * @param array{
     *   meta?: ?MetaList,
     *   data?: ?array<Media>,
     *   links?: ?LinksList,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?MetaList
     */
    public function getMeta(): ?MetaList
    {
        return $this->meta;
    }

    /**
     * @param ?MetaList $value
     */
    public function setMeta(?MetaList $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<Media>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<Media> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?LinksList
     */
    public function getLinks(): ?LinksList
    {
        return $this->links;
    }

    /**
     * @param ?LinksList $value
     */
    public function setLinks(?LinksList $value = null): self
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
