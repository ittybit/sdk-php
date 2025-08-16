<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ConfirmationResponse extends JsonSerializableType
{
    /**
     * @var ?ConfirmationResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?ConfirmationResponseMeta $meta;

    /**
     * @var ?ConfirmationResponseData $data
     */
    #[JsonProperty('data')]
    private ?ConfirmationResponseData $data;

    /**
     * @var ?ConfirmationResponseError $error
     */
    #[JsonProperty('error')]
    private ?ConfirmationResponseError $error;

    /**
     * @var ?ConfirmationResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?ConfirmationResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?ConfirmationResponseMeta,
     *   data?: ?ConfirmationResponseData,
     *   error?: ?ConfirmationResponseError,
     *   links?: ?ConfirmationResponseLinks,
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
     * @return ?ConfirmationResponseMeta
     */
    public function getMeta(): ?ConfirmationResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?ConfirmationResponseMeta $value
     */
    public function setMeta(?ConfirmationResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?ConfirmationResponseData
     */
    public function getData(): ?ConfirmationResponseData
    {
        return $this->data;
    }

    /**
     * @param ?ConfirmationResponseData $value
     */
    public function setData(?ConfirmationResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?ConfirmationResponseError
     */
    public function getError(): ?ConfirmationResponseError
    {
        return $this->error;
    }

    /**
     * @param ?ConfirmationResponseError $value
     */
    public function setError(?ConfirmationResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?ConfirmationResponseLinks
     */
    public function getLinks(): ?ConfirmationResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?ConfirmationResponseLinks $value
     */
    public function setLinks(?ConfirmationResponseLinks $value = null): self
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
