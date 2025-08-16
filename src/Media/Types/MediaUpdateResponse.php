<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaUpdateResponse extends JsonSerializableType
{
    /**
     * @var ?MediaUpdateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaUpdateResponseMeta $meta;

    /**
     * @var ?MediaUpdateResponseData $data
     */
    #[JsonProperty('data')]
    private ?MediaUpdateResponseData $data;

    /**
     * @var ?MediaUpdateResponseError $error
     */
    #[JsonProperty('error')]
    private ?MediaUpdateResponseError $error;

    /**
     * @var ?MediaUpdateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaUpdateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaUpdateResponseMeta,
     *   data?: ?MediaUpdateResponseData,
     *   error?: ?MediaUpdateResponseError,
     *   links?: ?MediaUpdateResponseLinks,
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
     * @return ?MediaUpdateResponseMeta
     */
    public function getMeta(): ?MediaUpdateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaUpdateResponseMeta $value
     */
    public function setMeta(?MediaUpdateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?MediaUpdateResponseData
     */
    public function getData(): ?MediaUpdateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?MediaUpdateResponseData $value
     */
    public function setData(?MediaUpdateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaUpdateResponseError
     */
    public function getError(): ?MediaUpdateResponseError
    {
        return $this->error;
    }

    /**
     * @param ?MediaUpdateResponseError $value
     */
    public function setError(?MediaUpdateResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?MediaUpdateResponseLinks
     */
    public function getLinks(): ?MediaUpdateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaUpdateResponseLinks $value
     */
    public function setLinks(?MediaUpdateResponseLinks $value = null): self
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
