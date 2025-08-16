<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsUpdateResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationsUpdateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationsUpdateResponseMeta $meta;

    /**
     * @var ?AutomationsUpdateResponseData $data
     */
    #[JsonProperty('data')]
    private ?AutomationsUpdateResponseData $data;

    /**
     * @var ?AutomationsUpdateResponseError $error
     */
    #[JsonProperty('error')]
    private ?AutomationsUpdateResponseError $error;

    /**
     * @var ?AutomationsUpdateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationsUpdateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationsUpdateResponseMeta,
     *   data?: ?AutomationsUpdateResponseData,
     *   error?: ?AutomationsUpdateResponseError,
     *   links?: ?AutomationsUpdateResponseLinks,
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
     * @return ?AutomationsUpdateResponseMeta
     */
    public function getMeta(): ?AutomationsUpdateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationsUpdateResponseMeta $value
     */
    public function setMeta(?AutomationsUpdateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?AutomationsUpdateResponseData
     */
    public function getData(): ?AutomationsUpdateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?AutomationsUpdateResponseData $value
     */
    public function setData(?AutomationsUpdateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationsUpdateResponseError
     */
    public function getError(): ?AutomationsUpdateResponseError
    {
        return $this->error;
    }

    /**
     * @param ?AutomationsUpdateResponseError $value
     */
    public function setError(?AutomationsUpdateResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?AutomationsUpdateResponseLinks
     */
    public function getLinks(): ?AutomationsUpdateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationsUpdateResponseLinks $value
     */
    public function setLinks(?AutomationsUpdateResponseLinks $value = null): self
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
