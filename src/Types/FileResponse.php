<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FileResponse extends JsonSerializableType
{
    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?File $data
     */
    #[JsonProperty('data')]
    private ?File $data;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @param array{
     *   meta?: mixed,
     *   data?: ?File,
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
     * @return ?File
     */
    public function getData(): ?File
    {
        return $this->data;
    }

    /**
     * @param ?File $value
     */
    public function setData(?File $value = null): self
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
