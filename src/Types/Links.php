<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard pagination and self links for API responses.
 */
class Links extends JsonSerializableType
{
    /**
     * @var ?string $self The absolute URL of the current request, potentially including query parameters.
     */
    #[JsonProperty('self')]
    public ?string $self;

    /**
     * @var ?string $next URL for the next page of results.
     */
    #[JsonProperty('next')]
    public ?string $next;

    /**
     * @var ?string $prev URL for the previous page of results.
     */
    #[JsonProperty('prev')]
    public ?string $prev;

    /**
     * @var ?string $parent URL for the parent resource.
     */
    #[JsonProperty('parent')]
    public ?string $parent;

    /**
     * @var ?string $first URL for the first page of results.
     */
    #[JsonProperty('first')]
    public ?string $first;

    /**
     * @var ?string $last URL for the last page of results.
     */
    #[JsonProperty('last')]
    public ?string $last;

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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
