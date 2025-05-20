<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Types\Links;

class FilesDeleteResponse extends JsonSerializableType
{
    /**
     * @var ?FilesDeleteResponseData $data Contains a confirmation message
     */
    #[JsonProperty('data')]
    private ?FilesDeleteResponseData $data;

    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @param array{
     *   data?: ?FilesDeleteResponseData,
     *   meta?: mixed,
     *   links?: ?Links,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->data = $values['data'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?FilesDeleteResponseData
     */
    public function getData(): ?FilesDeleteResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesDeleteResponseData $value
     */
    public function setData(?FilesDeleteResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
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
