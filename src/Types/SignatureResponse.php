<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class SignatureResponse extends JsonSerializableType
{
    /**
     * @var ?SignatureResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?SignatureResponseMeta $meta;

    /**
     * @var ?SignatureResponseData $data
     */
    #[JsonProperty('data')]
    private ?SignatureResponseData $data;

    /**
     * @var ?SignatureResponseError $error
     */
    #[JsonProperty('error')]
    private ?SignatureResponseError $error;

    /**
     * @var ?SignatureResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?SignatureResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?SignatureResponseMeta,
     *   data?: ?SignatureResponseData,
     *   error?: ?SignatureResponseError,
     *   links?: ?SignatureResponseLinks,
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
     * @return ?SignatureResponseMeta
     */
    public function getMeta(): ?SignatureResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?SignatureResponseMeta $value
     */
    public function setMeta(?SignatureResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?SignatureResponseData
     */
    public function getData(): ?SignatureResponseData
    {
        return $this->data;
    }

    /**
     * @param ?SignatureResponseData $value
     */
    public function setData(?SignatureResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?SignatureResponseError
     */
    public function getError(): ?SignatureResponseError
    {
        return $this->error;
    }

    /**
     * @param ?SignatureResponseError $value
     */
    public function setError(?SignatureResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?SignatureResponseLinks
     */
    public function getLinks(): ?SignatureResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?SignatureResponseLinks $value
     */
    public function setLinks(?SignatureResponseLinks $value = null): self
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
