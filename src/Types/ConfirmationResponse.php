<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ConfirmationResponse extends JsonSerializableType
{
    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?Confirmation $data
     */
    #[JsonProperty('data')]
    private ?Confirmation $data;

    /**
     * @var ?Error $error
     */
    #[JsonProperty('error')]
    private ?Error $error;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @param array{
     *   meta?: mixed,
     *   data?: ?Confirmation,
     *   error?: ?Error,
     *   links?: ?Links,
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
     * @return mixed
     */
    public function getMeta(): mixed
    {
        return $this->meta;
    }

    /**
     * @param mixed $value
     */
    public function setMeta(mixed $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?Confirmation
     */
    public function getData(): ?Confirmation
    {
        return $this->data;
    }

    /**
     * @param ?Confirmation $value
     */
    public function setData(?Confirmation $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?Error
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @param ?Error $value
     */
    public function setError(?Error $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?Links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * @param ?Links $value
     */
    public function setLinks(?Links $value = null): self
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
