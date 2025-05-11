<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class MediaListResponse extends JsonSerializableType
{
    /**
     * @var ?MediaListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaListResponseMeta $meta;

    /**
     * @var ?array<MediaListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([MediaListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?MediaListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaListResponseMeta,
     *   data?: ?array<MediaListResponseDataItem>,
     *   links?: ?MediaListResponseLinks,
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
     * @return ?MediaListResponseMeta
     */
    public function getMeta(): ?MediaListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaListResponseMeta $value
     */
    public function setMeta(?MediaListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<MediaListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<MediaListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaListResponseLinks
     */
    public function getLinks(): ?MediaListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaListResponseLinks $value
     */
    public function setLinks(?MediaListResponseLinks $value = null): self
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
