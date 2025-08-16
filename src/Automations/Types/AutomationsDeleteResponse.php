<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsDeleteResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationsDeleteResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationsDeleteResponseMeta $meta;

    /**
     * @var ?AutomationsDeleteResponseData $data
     */
    #[JsonProperty('data')]
    private ?AutomationsDeleteResponseData $data;

    /**
     * @var ?AutomationsDeleteResponseError $error
     */
    #[JsonProperty('error')]
    private ?AutomationsDeleteResponseError $error;

    /**
     * @var ?AutomationsDeleteResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationsDeleteResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationsDeleteResponseMeta,
     *   data?: ?AutomationsDeleteResponseData,
     *   error?: ?AutomationsDeleteResponseError,
     *   links?: ?AutomationsDeleteResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?AutomationsDeleteResponseMeta
     */
    public function getMeta(): ?AutomationsDeleteResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationsDeleteResponseMeta $value
     */
    public function setMeta(?AutomationsDeleteResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?AutomationsDeleteResponseData
     */
    public function getData(): ?AutomationsDeleteResponseData
    {
        return $this->data;
    }

    /**
     * @param ?AutomationsDeleteResponseData $value
     */
    public function setData(?AutomationsDeleteResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationsDeleteResponseError
     */
    public function getError(): ?AutomationsDeleteResponseError
    {
        return $this->error;
    }

    /**
     * @param ?AutomationsDeleteResponseError $value
     */
    public function setError(?AutomationsDeleteResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?AutomationsDeleteResponseLinks
     */
    public function getLinks(): ?AutomationsDeleteResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationsDeleteResponseLinks $value
     */
    public function setLinks(?AutomationsDeleteResponseLinks $value = null): self
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
