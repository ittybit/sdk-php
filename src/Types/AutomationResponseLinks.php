<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationResponseLinks extends JsonSerializableType
{
    /**
     * @var ?string $self
     */
    #[JsonProperty('self')]
    private ?string $self;

    /**
     * @var ?string $parent
     */
    #[JsonProperty('parent')]
    private ?string $parent;

    /**
     * @param array{
     *   self?: ?string,
     *   parent?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->self = $values['self'] ?? null;
        $this->parent = $values['parent'] ?? null;
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
     * @return ?string
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @param ?string $value
     */
    public function setParent(?string $value = null): self
    {
        $this->parent = $value;
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
