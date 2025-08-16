<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class TasksGetResponse extends JsonSerializableType
{
    /**
     * @var ?TasksGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TasksGetResponseMeta $meta;

    /**
     * @var ?TasksGetResponseData $data
     */
    #[JsonProperty('data')]
    private ?TasksGetResponseData $data;

    /**
     * @var ?TasksGetResponseError $error
     */
    #[JsonProperty('error')]
    private ?TasksGetResponseError $error;

    /**
     * @var ?TasksGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TasksGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TasksGetResponseMeta,
     *   data?: ?TasksGetResponseData,
     *   error?: ?TasksGetResponseError,
     *   links?: ?TasksGetResponseLinks,
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
     * @return ?TasksGetResponseMeta
     */
    public function getMeta(): ?TasksGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TasksGetResponseMeta $value
     */
    public function setMeta(?TasksGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?TasksGetResponseData
     */
    public function getData(): ?TasksGetResponseData
    {
        return $this->data;
    }

    /**
     * @param ?TasksGetResponseData $value
     */
    public function setData(?TasksGetResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TasksGetResponseError
     */
    public function getError(): ?TasksGetResponseError
    {
        return $this->error;
    }

    /**
     * @param ?TasksGetResponseError $value
     */
    public function setError(?TasksGetResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?TasksGetResponseLinks
     */
    public function getLinks(): ?TasksGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TasksGetResponseLinks $value
     */
    public function setLinks(?TasksGetResponseLinks $value = null): self
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
