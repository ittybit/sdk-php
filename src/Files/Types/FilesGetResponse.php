<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesGetResponse extends JsonSerializableType
{
    /**
     * @var ?FilesGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesGetResponseMeta $meta;

    /**
     * @var ?FilesGetResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesGetResponseData $data;

    /**
     * @var ?FilesGetResponseError $error
     */
    #[JsonProperty('error')]
    private ?FilesGetResponseError $error;

    /**
     * @var ?FilesGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesGetResponseMeta,
     *   data?: ?FilesGetResponseData,
     *   error?: ?FilesGetResponseError,
     *   links?: ?FilesGetResponseLinks,
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
     * @return ?FilesGetResponseMeta
     */
    public function getMeta(): ?FilesGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesGetResponseMeta $value
     */
    public function setMeta(?FilesGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesGetResponseData
     */
    public function getData(): ?FilesGetResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesGetResponseData $value
     */
    public function setData(?FilesGetResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesGetResponseError
     */
    public function getError(): ?FilesGetResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FilesGetResponseError $value
     */
    public function setError(?FilesGetResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?FilesGetResponseLinks
     */
    public function getLinks(): ?FilesGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesGetResponseLinks $value
     */
    public function setLinks(?FilesGetResponseLinks $value = null): self
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
