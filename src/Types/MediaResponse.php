<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaResponse extends JsonSerializableType
{
    /**
     * @var ?MediaResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaResponseMeta $meta;

    /**
     * @var ?MediaResponseData $data
     */
    #[JsonProperty('data')]
    private ?MediaResponseData $data;

    /**
     * @var ?MediaResponseError $error
     */
    #[JsonProperty('error')]
    private ?MediaResponseError $error;

    /**
     * @var ?MediaResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaResponseMeta,
     *   data?: ?MediaResponseData,
     *   error?: ?MediaResponseError,
     *   links?: ?MediaResponseLinks,
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
     * @return ?MediaResponseMeta
     */
    public function getMeta(): ?MediaResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaResponseMeta $value
     */
    public function setMeta(?MediaResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?MediaResponseData
     */
    public function getData(): ?MediaResponseData
    {
        return $this->data;
    }

    /**
     * @param ?MediaResponseData $value
     */
    public function setData(?MediaResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaResponseError
     */
    public function getError(): ?MediaResponseError
    {
        return $this->error;
    }

    /**
     * @param ?MediaResponseError $value
     */
    public function setError(?MediaResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?MediaResponseLinks
     */
    public function getLinks(): ?MediaResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaResponseLinks $value
     */
    public function setLinks(?MediaResponseLinks $value = null): self
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
