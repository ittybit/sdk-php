<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FileResponse extends JsonSerializableType
{
    /**
     * @var ?FileResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FileResponseMeta $meta;

    /**
     * @var ?FileResponseData $data
     */
    #[JsonProperty('data')]
    private ?FileResponseData $data;

    /**
     * @var ?FileResponseError $error
     */
    #[JsonProperty('error')]
    private ?FileResponseError $error;

    /**
     * @var ?FileResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FileResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FileResponseMeta,
     *   data?: ?FileResponseData,
     *   error?: ?FileResponseError,
     *   links?: ?FileResponseLinks,
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
     * @return ?FileResponseMeta
     */
    public function getMeta(): ?FileResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FileResponseMeta $value
     */
    public function setMeta(?FileResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?FileResponseData
     */
    public function getData(): ?FileResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FileResponseData $value
     */
    public function setData(?FileResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FileResponseError
     */
    public function getError(): ?FileResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FileResponseError $value
     */
    public function setError(?FileResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?FileResponseLinks
     */
    public function getLinks(): ?FileResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FileResponseLinks $value
     */
    public function setLinks(?FileResponseLinks $value = null): self
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
