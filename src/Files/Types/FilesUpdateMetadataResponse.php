<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesUpdateMetadataResponse extends JsonSerializableType
{
    /**
     * @var ?FilesUpdateMetadataResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesUpdateMetadataResponseMeta $meta;

    /**
     * @var ?FilesUpdateMetadataResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesUpdateMetadataResponseData $data;

    /**
     * @var ?FilesUpdateMetadataResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesUpdateMetadataResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesUpdateMetadataResponseMeta,
     *   data?: ?FilesUpdateMetadataResponseData,
     *   links?: ?FilesUpdateMetadataResponseLinks,
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
     * @return ?FilesUpdateMetadataResponseMeta
     */
    public function getMeta(): ?FilesUpdateMetadataResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesUpdateMetadataResponseMeta $value
     */
    public function setMeta(?FilesUpdateMetadataResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesUpdateMetadataResponseData
     */
    public function getData(): ?FilesUpdateMetadataResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesUpdateMetadataResponseData $value
     */
    public function setData(?FilesUpdateMetadataResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesUpdateMetadataResponseLinks
     */
    public function getLinks(): ?FilesUpdateMetadataResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesUpdateMetadataResponseLinks $value
     */
    public function setLinks(?FilesUpdateMetadataResponseLinks $value = null): self
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
