<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for Signature responses.
 */
class SignatureResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?Signature $data
     */
    #[JsonProperty('data')]
    private ?Signature $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?Signature,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return ?Signature
     */
    public function getData(): ?Signature
    {
        return $this->data;
    }

    /**
     * @param ?Signature $value
     */
    public function setData(?Signature $value = null): self
    {
        $this->data = $value;
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
