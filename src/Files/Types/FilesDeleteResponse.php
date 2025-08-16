<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesDeleteResponse extends JsonSerializableType
{
    /**
     * @var ?FilesDeleteResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesDeleteResponseMeta $meta;

    /**
     * @var ?FilesDeleteResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesDeleteResponseData $data;

    /**
     * @var ?FilesDeleteResponseError $error
     */
    #[JsonProperty('error')]
    private ?FilesDeleteResponseError $error;

    /**
     * @var ?FilesDeleteResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesDeleteResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesDeleteResponseMeta,
     *   data?: ?FilesDeleteResponseData,
     *   error?: ?FilesDeleteResponseError,
     *   links?: ?FilesDeleteResponseLinks,
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
     * @return ?FilesDeleteResponseError
     */
    public function getError(): ?FilesDeleteResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FilesDeleteResponseError $value
     */
    public function setError(?FilesDeleteResponseError $value = null): self
    {
        $this->error = $value;
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
