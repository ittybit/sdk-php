<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for confirmation message responses.
 */
class ConfirmationResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?ConfirmationResponseData $data
     */
    #[JsonProperty('data')]
    private ?ConfirmationResponseData $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?ConfirmationResponseData,
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
