<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationResponse extends JsonSerializableType
{
    /**
     * @var mixed $meta
     */
    #[JsonProperty('meta')]
    private mixed $meta;

    /**
     * @var ?Automation $data
     */
    #[JsonProperty('data')]
    private ?Automation $data;

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
     *   data?: ?Automation,
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
     * @return ?Automation
     */
    public function getData(): ?Automation
    {
        return $this->data;
    }

    /**
     * @param ?Automation $value
     */
    public function setData(?Automation $value = null): self
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
