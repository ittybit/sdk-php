<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaListResponseLinks extends JsonSerializableType
{
    /**
     * @var ?string $self
     */
    #[JsonProperty('self')]
    private ?string $self;

    /**
     * @var ?string $first
     */
    #[JsonProperty('first')]
    private ?string $first;

    /**
     * @var ?string $next
     */
    #[JsonProperty('next')]
    private ?string $next;

    /**
     * @var ?string $prev
     */
    #[JsonProperty('prev')]
    private ?string $prev;

    /**
     * @var ?string $last
     */
    #[JsonProperty('last')]
    private ?string $last;

    /**
     * @param array{
     *   self?: ?string,
     *   first?: ?string,
     *   next?: ?string,
     *   prev?: ?string,
     *   last?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->self = $values['self'] ?? null;
        $this->first = $values['first'] ?? null;
        $this->next = $values['next'] ?? null;
        $this->prev = $values['prev'] ?? null;
        $this->last = $values['last'] ?? null;
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
    public function getFirst(): ?string
    {
        return $this->first;
    }

    /**
     * @param ?string $value
     */
    public function setFirst(?string $value = null): self
    {
        $this->first = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * @param ?string $value
     */
    public function setNext(?string $value = null): self
    {
        $this->next = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getPrev(): ?string
    {
        return $this->prev;
    }

    /**
     * @param ?string $value
     */
    public function setPrev(?string $value = null): self
    {
        $this->prev = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getLast(): ?string
    {
        return $this->last;
    }

    /**
     * @param ?string $value
     */
    public function setLast(?string $value = null): self
    {
        $this->last = $value;
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
