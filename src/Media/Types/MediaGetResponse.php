<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaGetResponse extends JsonSerializableType
{
    /**
     * @var ?MediaGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaGetResponseMeta $meta;

    /**
     * @var ?MediaGetResponseData $data
     */
    #[JsonProperty('data')]
    private ?MediaGetResponseData $data;

    /**
     * @var ?MediaGetResponseError $error
     */
    #[JsonProperty('error')]
    private ?MediaGetResponseError $error;

    /**
     * @var ?MediaGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaGetResponseMeta,
     *   data?: ?MediaGetResponseData,
     *   error?: ?MediaGetResponseError,
     *   links?: ?MediaGetResponseLinks,
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
     * @return ?MediaGetResponseMeta
     */
    public function getMeta(): ?MediaGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaGetResponseMeta $value
     */
    public function setMeta(?MediaGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?MediaGetResponseData
     */
    public function getData(): ?MediaGetResponseData
    {
        return $this->data;
    }

    /**
     * @param ?MediaGetResponseData $value
     */
    public function setData(?MediaGetResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaGetResponseError
     */
    public function getError(): ?MediaGetResponseError
    {
        return $this->error;
    }

    /**
     * @param ?MediaGetResponseError $value
     */
    public function setError(?MediaGetResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?MediaGetResponseLinks
     */
    public function getLinks(): ?MediaGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaGetResponseLinks $value
     */
    public function setLinks(?MediaGetResponseLinks $value = null): self
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
