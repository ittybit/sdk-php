<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class TasksCreateResponse extends JsonSerializableType
{
    /**
     * @var ?TasksCreateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TasksCreateResponseMeta $meta;

    /**
     * @var ?TasksCreateResponseData $data
     */
    #[JsonProperty('data')]
    private ?TasksCreateResponseData $data;

    /**
     * @var ?TasksCreateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TasksCreateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TasksCreateResponseMeta,
     *   data?: ?TasksCreateResponseData,
     *   links?: ?TasksCreateResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?TasksCreateResponseMeta
     */
    public function getMeta(): ?TasksCreateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TasksCreateResponseMeta $value
     */
    public function setMeta(?TasksCreateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?TasksCreateResponseData
     */
    public function getData(): ?TasksCreateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?TasksCreateResponseData $value
     */
    public function setData(?TasksCreateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TasksCreateResponseLinks
     */
    public function getLinks(): ?TasksCreateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TasksCreateResponseLinks $value
     */
    public function setLinks(?TasksCreateResponseLinks $value = null): self
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
