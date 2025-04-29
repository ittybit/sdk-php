<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for single Task responses.
 */
class TaskResponse extends JsonSerializableType
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    private ?Meta $meta;

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
     *   meta?: ?Meta,
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
     * @return ?Meta
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * @param ?Meta $value
     */
    public function setMeta(?Meta $value = null): self
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
