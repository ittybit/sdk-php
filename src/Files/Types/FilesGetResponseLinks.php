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
    public ?string $self;

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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
