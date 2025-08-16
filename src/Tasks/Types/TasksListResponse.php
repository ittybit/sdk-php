<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TasksListResponse extends JsonSerializableType
{
    /**
     * @var ?TasksListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TasksListResponseMeta $meta;

    /**
     * @var ?array<TasksListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([TasksListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?TasksListResponseError $error
     */
    #[JsonProperty('error')]
    private ?TasksListResponseError $error;

    /**
     * @var ?TasksListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TasksListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TasksListResponseMeta,
     *   data?: ?array<TasksListResponseDataItem>,
     *   error?: ?TasksListResponseError,
     *   links?: ?TasksListResponseLinks,
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
     * @return ?TasksListResponseMeta
     */
    public function getMeta(): ?TasksListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TasksListResponseMeta $value
     */
    public function setMeta(?TasksListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<TasksListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<TasksListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TasksListResponseError
     */
    public function getError(): ?TasksListResponseError
    {
        return $this->error;
    }

    /**
     * @param ?TasksListResponseError $value
     */
    public function setError(?TasksListResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?TasksListResponseLinks
     */
    public function getLinks(): ?TasksListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TasksListResponseLinks $value
     */
    public function setLinks(?TasksListResponseLinks $value = null): self
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
