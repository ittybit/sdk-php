<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsCreateResponse extends JsonSerializableType
{
    /**
     * @var ?AutomationsCreateResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?AutomationsCreateResponseMeta $meta;

    /**
     * @var ?AutomationsCreateResponseData $data
     */
    #[JsonProperty('data')]
    private ?AutomationsCreateResponseData $data;

    /**
     * @var ?AutomationsCreateResponseError $error
     */
    #[JsonProperty('error')]
    private ?AutomationsCreateResponseError $error;

    /**
     * @var ?AutomationsCreateResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?AutomationsCreateResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?AutomationsCreateResponseMeta,
     *   data?: ?AutomationsCreateResponseData,
     *   error?: ?AutomationsCreateResponseError,
     *   links?: ?AutomationsCreateResponseLinks,
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
     * @return ?AutomationsCreateResponseMeta
     */
    public function getMeta(): ?AutomationsCreateResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?AutomationsCreateResponseMeta $value
     */
    public function setMeta(?AutomationsCreateResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?AutomationsCreateResponseData
     */
    public function getData(): ?AutomationsCreateResponseData
    {
        return $this->data;
    }

    /**
     * @param ?AutomationsCreateResponseData $value
     */
    public function setData(?AutomationsCreateResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?AutomationsCreateResponseError
     */
    public function getError(): ?AutomationsCreateResponseError
    {
        return $this->error;
    }

    /**
     * @param ?AutomationsCreateResponseError $value
     */
    public function setError(?AutomationsCreateResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?AutomationsCreateResponseLinks
     */
    public function getLinks(): ?AutomationsCreateResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?AutomationsCreateResponseLinks $value
     */
    public function setLinks(?AutomationsCreateResponseLinks $value = null): self
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
