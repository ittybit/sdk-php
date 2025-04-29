<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Base structure for standard API responses.
 */
class ApiResponseBase extends JsonSerializableType
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    public ?Meta $meta;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    public ?Links $links;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
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
