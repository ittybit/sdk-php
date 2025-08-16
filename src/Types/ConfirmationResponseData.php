<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ConfirmationResponseData extends JsonSerializableType
{
    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    private ?string $message;

    /**
     * @param array{
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param ?string $value
     */
    public function setMessage(?string $value = null): self
    {
        $this->message = $value;
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
