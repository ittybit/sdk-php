<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class FilesGetResponseLinks extends JsonSerializableType
{
    /**
     * @var ?string $self
     */
    #[JsonProperty('self')]
    private ?string $self;

    /**
     * @param array{
     *   self?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->self = $values['self'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getSelf(): ?string
    {
        return $this->self;
    }

    /**
     * @param ?string $value
     */
    public function setSelf(?string $value = null): self
    {
        $this->self = $value;
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
