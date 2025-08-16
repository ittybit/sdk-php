<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class TaskResponse extends JsonSerializableType
{
    /**
     * @var ?TaskResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TaskResponseMeta $meta;

    /**
     * @var ?TaskResponseData $data
     */
    #[JsonProperty('data')]
    private ?TaskResponseData $data;

    /**
     * @var ?TaskResponseError $error
     */
    #[JsonProperty('error')]
    private ?TaskResponseError $error;

    /**
     * @var ?TaskResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TaskResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TaskResponseMeta,
     *   data?: ?TaskResponseData,
     *   error?: ?TaskResponseError,
     *   links?: ?TaskResponseLinks,
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
     * @return ?TaskResponseMeta
     */
    public function getMeta(): ?TaskResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TaskResponseMeta $value
     */
    public function setMeta(?TaskResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?TaskResponseData
     */
    public function getData(): ?TaskResponseData
    {
        return $this->data;
    }

    /**
     * @param ?TaskResponseData $value
     */
    public function setData(?TaskResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TaskResponseError
     */
    public function getError(): ?TaskResponseError
    {
        return $this->error;
    }

    /**
     * @param ?TaskResponseError $value
     */
    public function setError(?TaskResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?TaskResponseLinks
     */
    public function getLinks(): ?TaskResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TaskResponseLinks $value
     */
    public function setLinks(?TaskResponseLinks $value = null): self
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
