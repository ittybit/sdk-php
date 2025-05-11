<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaCreateResponse extends JsonSerializableType
{
    /**
     * @var ?MediaCreateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaCreateResponseMeta $meta;

    /**
     * @var ?MediaCreateResponseData $data
     */
    #[JsonProperty('data')]
    private ?MediaCreateResponseData $data;

    /**
     * @var ?MediaCreateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaCreateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaCreateResponseMeta,
     *   data?: ?MediaCreateResponseData,
     *   links?: ?MediaCreateResponseLinks,
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
     * @return ?MediaCreateResponseMeta
     */
    public function getMeta(): ?MediaCreateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaCreateResponseMeta $value
     */
    public function setMeta(?MediaCreateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?MediaCreateResponseData
     */
    public function getData(): ?MediaCreateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?MediaCreateResponseData $value
     */
    public function setData(?MediaCreateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaCreateResponseLinks
     */
    public function getLinks(): ?MediaCreateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaCreateResponseLinks $value
     */
    public function setLinks(?MediaCreateResponseLinks $value = null): self
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
