<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class FileListResponse extends JsonSerializableType
{
    /**
     * @var ?FileListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FileListResponseMeta $meta;

    /**
     * @var ?array<FileListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([FileListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?FileListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FileListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FileListResponseMeta,
     *   data?: ?array<FileListResponseDataItem>,
     *   links?: ?FileListResponseLinks,
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
     * @return ?FileListResponseMeta
     */
    public function getMeta(): ?FileListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FileListResponseMeta $value
     */
    public function setMeta(?FileListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<FileListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<FileListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FileListResponseLinks
     */
    public function getLinks(): ?FileListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FileListResponseLinks $value
     */
    public function setLinks(?FileListResponseLinks $value = null): self
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
