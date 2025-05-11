<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationsListResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationsListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationsListResponseMeta $meta;

    /**
     * @var ?array<AutomationsListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([AutomationsListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?AutomationsListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationsListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationsListResponseMeta,
     *   data?: ?array<AutomationsListResponseDataItem>,
     *   links?: ?AutomationsListResponseLinks,
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
     * @return ?AutomationsListResponseMeta
     */
    public function getMeta(): ?AutomationsListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationsListResponseMeta $value
     */
    public function setMeta(?AutomationsListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationsListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<AutomationsListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationsListResponseLinks
     */
    public function getLinks(): ?AutomationsListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationsListResponseLinks $value
     */
    public function setLinks(?AutomationsListResponseLinks $value = null): self
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
