<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesCreateFromUrlResponse extends JsonSerializableType
{
    /**
     * @var ?FilesCreateFromUrlResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesCreateFromUrlResponseMeta $meta;

    /**
     * @var ?FilesCreateFromUrlResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesCreateFromUrlResponseData $data;

    /**
     * @var ?FilesCreateFromUrlResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesCreateFromUrlResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesCreateFromUrlResponseMeta,
     *   data?: ?FilesCreateFromUrlResponseData,
     *   links?: ?FilesCreateFromUrlResponseLinks,
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
     * @return ?FilesCreateFromUrlResponseMeta
     */
    public function getMeta(): ?FilesCreateFromUrlResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesCreateFromUrlResponseMeta $value
     */
    public function setMeta(?FilesCreateFromUrlResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesCreateFromUrlResponseData
     */
    public function getData(): ?FilesCreateFromUrlResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesCreateFromUrlResponseData $value
     */
    public function setData(?FilesCreateFromUrlResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesCreateFromUrlResponseLinks
     */
    public function getLinks(): ?FilesCreateFromUrlResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesCreateFromUrlResponseLinks $value
     */
    public function setLinks(?FilesCreateFromUrlResponseLinks $value = null): self
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
