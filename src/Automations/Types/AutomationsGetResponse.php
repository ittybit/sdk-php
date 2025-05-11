<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsGetResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationsGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationsGetResponseMeta $meta;

    /**
     * @var ?AutomationsGetResponseData $data
     */
    #[JsonProperty('data')]
    private ?AutomationsGetResponseData $data;

    /**
     * @var ?AutomationsGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationsGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationsGetResponseMeta,
     *   data?: ?AutomationsGetResponseData,
     *   links?: ?AutomationsGetResponseLinks,
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
     * @return ?AutomationsGetResponseMeta
     */
    public function getMeta(): ?AutomationsGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationsGetResponseMeta $value
     */
    public function setMeta(?AutomationsGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?AutomationsGetResponseData
     */
    public function getData(): ?AutomationsGetResponseData
    {
        return $this->data;
    }

    /**
     * @param ?AutomationsGetResponseData $value
     */
    public function setData(?AutomationsGetResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationsGetResponseLinks
     */
    public function getLinks(): ?AutomationsGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationsGetResponseLinks $value
     */
    public function setLinks(?AutomationsGetResponseLinks $value = null): self
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
