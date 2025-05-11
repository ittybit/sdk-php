<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationResponseMeta $meta;

    /**
     * @var ?AutomationResponseData $data
     */
    #[JsonProperty('data')]
    private ?AutomationResponseData $data;

    /**
     * @var ?AutomationResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationResponseMeta,
     *   data?: ?AutomationResponseData,
     *   links?: ?AutomationResponseLinks,
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
     * @return ?AutomationResponseMeta
     */
    public function getMeta(): ?AutomationResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationResponseMeta $value
     */
    public function setMeta(?AutomationResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?AutomationResponseData
     */
    public function getData(): ?AutomationResponseData
    {
        return $this->data;
    }

    /**
     * @param ?AutomationResponseData $value
     */
    public function setData(?AutomationResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationResponseLinks
     */
    public function getLinks(): ?AutomationResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationResponseLinks $value
     */
    public function setLinks(?AutomationResponseLinks $value = null): self
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
