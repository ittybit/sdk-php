<?php

namespace Ittybit\Signatures\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class SignaturesCreateResponse extends JsonSerializableType
{
    /**
     * @var ?SignaturesCreateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?SignaturesCreateResponseMeta $meta;

    /**
     * @var ?SignaturesCreateResponseData $data
     */
    #[JsonProperty('data')]
    private ?SignaturesCreateResponseData $data;

    /**
     * @var ?SignaturesCreateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?SignaturesCreateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?SignaturesCreateResponseMeta,
     *   data?: ?SignaturesCreateResponseData,
     *   links?: ?SignaturesCreateResponseLinks,
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
     * @return ?SignaturesCreateResponseMeta
     */
    public function getMeta(): ?SignaturesCreateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?SignaturesCreateResponseMeta $value
     */
    public function setMeta(?SignaturesCreateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?SignaturesCreateResponseData
     */
    public function getData(): ?SignaturesCreateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?SignaturesCreateResponseData $value
     */
    public function setData(?SignaturesCreateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?SignaturesCreateResponseLinks
     */
    public function getLinks(): ?SignaturesCreateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?SignaturesCreateResponseLinks $value
     */
    public function setLinks(?SignaturesCreateResponseLinks $value = null): self
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
