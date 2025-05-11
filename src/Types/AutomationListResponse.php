<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationListResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationListResponseMeta $meta;

    /**
     * @var ?array<AutomationListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([AutomationListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?AutomationListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationListResponseMeta,
     *   data?: ?array<AutomationListResponseDataItem>,
     *   links?: ?AutomationListResponseLinks,
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
     * @return ?AutomationListResponseMeta
     */
    public function getMeta(): ?AutomationListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationListResponseMeta $value
     */
    public function setMeta(?AutomationListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<AutomationListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationListResponseLinks
     */
    public function getLinks(): ?AutomationListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationListResponseLinks $value
     */
    public function setLinks(?AutomationListResponseLinks $value = null): self
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
