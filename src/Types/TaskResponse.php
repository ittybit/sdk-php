<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class TaskResponse extends JsonSerializableType
{
    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?Task $data
     */
    #[JsonProperty('data')]
    private ?Task $data;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @param array{
     *   meta?: mixed,
     *   data?: ?Task,
     *   links?: ?Links,
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
     * @return mixed
     */
    public function getMeta(): mixed
    {
        return $this->meta;
    }

    /**
     * @param mixed $value
     */
    public function setMeta(mixed $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?Task
     */
    public function getData(): ?Task
    {
        return $this->data;
    }

    /**
     * @param ?Task $value
     */
    public function setData(?Task $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?Links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * @param ?Links $value
     */
    public function setLinks(?Links $value = null): self
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
