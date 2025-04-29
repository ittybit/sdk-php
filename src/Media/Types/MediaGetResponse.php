<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Types\Media;

class MediaGetResponse extends JsonSerializableType
{
    /**
     * @var ?MediaGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaGetResponseMeta $meta;

    /**
     * @var ?Media $data
     */
    #[JsonProperty('data')]
    private ?Media $data;

    /**
     * @var ?MediaGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaGetResponseMeta,
     *   data?: ?Media,
     *   links?: ?MediaGetResponseLinks,
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
     * @return ?MediaGetResponseMeta
     */
    public function getMeta(): ?MediaGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaGetResponseMeta $value
     */
    public function setMeta(?MediaGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?Media
     */
    public function getData(): ?Media
    {
        return $this->data;
    }

    /**
     * @param ?Media $value
     */
    public function setData(?Media $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaGetResponseLinks
     */
    public function getLinks(): ?MediaGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaGetResponseLinks $value
     */
    public function setLinks(?MediaGetResponseLinks $value = null): self
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
