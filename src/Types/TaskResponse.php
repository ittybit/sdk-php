<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for single Task responses.
 */
class TaskResponse extends JsonSerializableType
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    public ?Meta $meta;

    /**
     * @var ?Task $data
     */
    #[JsonProperty('data')]
    public ?Task $data;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    public ?Links $links;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   data?: ?Task,
     *   links?: ?Links,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
