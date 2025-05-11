<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TasksListFilteredResponse extends JsonSerializableType
{
    /**
     * @var ?TasksListFilteredResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?TasksListFilteredResponseMeta $meta;

    /**
     * @var ?array<TasksListFilteredResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([TasksListFilteredResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?TasksListFilteredResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?TasksListFilteredResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?TasksListFilteredResponseMeta,
     *   data?: ?array<TasksListFilteredResponseDataItem>,
     *   links?: ?TasksListFilteredResponseLinks,
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
     * @return ?TasksListFilteredResponseMeta
     */
    public function getMeta(): ?TasksListFilteredResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?TasksListFilteredResponseMeta $value
     */
    public function setMeta(?TasksListFilteredResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<TasksListFilteredResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<TasksListFilteredResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?TasksListFilteredResponseLinks
     */
    public function getLinks(): ?TasksListFilteredResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?TasksListFilteredResponseLinks $value
     */
    public function setLinks(?TasksListFilteredResponseLinks $value = null): self
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
