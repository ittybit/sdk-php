<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesDeleteResponse extends JsonSerializableType
{
    /**
     * @var ?FilesDeleteResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesDeleteResponseData $data;

    /**
     * @var ?FilesDeleteResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesDeleteResponseMeta $meta;

    /**
     * @var ?FilesDeleteResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesDeleteResponseLinks $links;

    /**
     * @param array{
     *   data?: ?FilesDeleteResponseData,
     *   meta?: ?FilesDeleteResponseMeta,
     *   links?: ?FilesDeleteResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->data = $values['data'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?FilesDeleteResponseData
     */
    public function getData(): ?FilesDeleteResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesDeleteResponseData $value
     */
    public function setData(?FilesDeleteResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesDeleteResponseMeta
     */
    public function getMeta(): ?FilesDeleteResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesDeleteResponseMeta $value
     */
    public function setMeta(?FilesDeleteResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesDeleteResponseLinks
     */
    public function getLinks(): ?FilesDeleteResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesDeleteResponseLinks $value
     */
    public function setLinks(?FilesDeleteResponseLinks $value = null): self
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
