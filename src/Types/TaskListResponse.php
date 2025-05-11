<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TaskListResponse extends JsonSerializableType
{
    /**
     * @var ?TaskListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TaskListResponseMeta $meta;

    /**
     * @var ?array<TaskListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([TaskListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?TaskListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TaskListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TaskListResponseMeta,
     *   data?: ?array<TaskListResponseDataItem>,
     *   links?: ?TaskListResponseLinks,
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
     * @return ?TaskListResponseMeta
     */
    public function getMeta(): ?TaskListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TaskListResponseMeta $value
     */
    public function setMeta(?TaskListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<TaskListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<TaskListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TaskListResponseLinks
     */
    public function getLinks(): ?TaskListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TaskListResponseLinks $value
     */
    public function setLinks(?TaskListResponseLinks $value = null): self
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
