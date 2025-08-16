<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesUpdateResponse extends JsonSerializableType
{
    /**
     * @var ?FilesUpdateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesUpdateResponseMeta $meta;

    /**
     * @var ?FilesUpdateResponseData $data
     */
    #[JsonProperty('data')]
    private ?FilesUpdateResponseData $data;

    /**
     * @var ?FilesUpdateResponseError $error
     */
    #[JsonProperty('error')]
    private ?FilesUpdateResponseError $error;

    /**
     * @var ?FilesUpdateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesUpdateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesUpdateResponseMeta,
     *   data?: ?FilesUpdateResponseData,
     *   error?: ?FilesUpdateResponseError,
     *   links?: ?FilesUpdateResponseLinks,
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
     * @return ?FilesUpdateResponseMeta
     */
    public function getMeta(): ?FilesUpdateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesUpdateResponseMeta $value
     */
    public function setMeta(?FilesUpdateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FilesUpdateResponseData
     */
    public function getData(): ?FilesUpdateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesUpdateResponseData $value
     */
    public function setData(?FilesUpdateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesUpdateResponseError
     */
    public function getError(): ?FilesUpdateResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FilesUpdateResponseError $value
     */
    public function setError(?FilesUpdateResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?FilesUpdateResponseLinks
     */
    public function getLinks(): ?FilesUpdateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesUpdateResponseLinks $value
     */
    public function setLinks(?FilesUpdateResponseLinks $value = null): self
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
