<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaDeleteResponse extends JsonSerializableType
{
    /**
     * @var ?MediaDeleteResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?MediaDeleteResponseMeta $meta;

    /**
     * @var ?MediaDeleteResponseData $data
     */
    #[JsonProperty('data')]
    private ?MediaDeleteResponseData $data;

    /**
     * @var ?MediaDeleteResponseError $error
     */
    #[JsonProperty('error')]
    private ?MediaDeleteResponseError $error;

    /**
     * @var ?MediaDeleteResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?MediaDeleteResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaDeleteResponseMeta,
     *   data?: ?MediaDeleteResponseData,
     *   error?: ?MediaDeleteResponseError,
     *   links?: ?MediaDeleteResponseLinks,
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
     * @return ?MediaDeleteResponseMeta
     */
    public function getMeta(): ?MediaDeleteResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?MediaDeleteResponseMeta $value
     */
    public function setMeta(?MediaDeleteResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?MediaDeleteResponseData
     */
    public function getData(): ?MediaDeleteResponseData
    {
        return $this->data;
    }

    /**
     * @param ?MediaDeleteResponseData $value
     */
    public function setData(?MediaDeleteResponseData $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?MediaDeleteResponseError
     */
    public function getError(): ?MediaDeleteResponseError
    {
        return $this->error;
    }

    /**
     * @param ?MediaDeleteResponseError $value
     */
    public function setError(?MediaDeleteResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?MediaDeleteResponseLinks
     */
    public function getLinks(): ?MediaDeleteResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?MediaDeleteResponseLinks $value
     */
    public function setLinks(?MediaDeleteResponseLinks $value = null): self
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
