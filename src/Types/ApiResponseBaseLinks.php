<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class ApiResponseBaseLinks extends JsonSerializableType
{
    /**
     * @var ?string $self The absolute URL of the current request, potentially including query parameters.
     */
    #[JsonProperty('self')]
    private ?string $self;

    /**
     * @var ?string $next URL for the next page of results.
     */
    #[JsonProperty('next')]
    private ?string $next;

    /**
     * @var ?string $prev URL for the previous page of results.
     */
    #[JsonProperty('prev')]
    private ?string $prev;

    /**
     * @var ?string $parent URL for the parent resource.
     */
    #[JsonProperty('parent')]
    private ?string $parent;

    /**
     * @var ?string $first URL for the first page of results.
     */
    #[JsonProperty('first')]
    private ?string $first;

    /**
     * @var ?string $last URL for the last page of results.
     */
    #[JsonProperty('last')]
    private ?string $last;

    /**
     * @param array{
     *   self?: ?string,
     *   next?: ?string,
     *   prev?: ?string,
     *   parent?: ?string,
     *   first?: ?string,
     *   last?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->self = $values['self'] ?? null;
        $this->next = $values['next'] ?? null;
        $this->prev = $values['prev'] ?? null;
        $this->parent = $values['parent'] ?? null;
        $this->first = $values['first'] ?? null;
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
