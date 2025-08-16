<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesCreateResponse extends JsonSerializableType
{
    /**
     * @var ?FilesCreateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesCreateResponseMeta $meta;

    /**
     * @var ?FilesCreateResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesCreateResponseData $data;

    /**
     * @var ?FilesCreateResponseError $error
     */
    #[JsonProperty('error')]
    private ?FilesCreateResponseError $error;

    /**
     * @var ?FilesCreateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesCreateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesCreateResponseMeta,
     *   data?: ?FilesCreateResponseData,
     *   error?: ?FilesCreateResponseError,
     *   links?: ?FilesCreateResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?FilesCreateResponseMeta
     */
    public function getMeta(): ?FilesCreateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesCreateResponseMeta $value
     */
    public function setMeta(?FilesCreateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesCreateResponseData
     */
    public function getData(): ?FilesCreateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesCreateResponseData $value
     */
    public function setData(?FilesCreateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesCreateResponseError
     */
    public function getError(): ?FilesCreateResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FilesCreateResponseError $value
     */
    public function setError(?FilesCreateResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?FilesCreateResponseLinks
     */
    public function getLinks(): ?FilesCreateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesCreateResponseLinks $value
     */
    public function setLinks(?FilesCreateResponseLinks $value = null): self
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
