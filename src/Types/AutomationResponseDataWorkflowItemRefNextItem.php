<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationResponseDataWorkflowItemRefNextItem extends JsonSerializableType
{
    /**
     * @var ?string $kind
     */
    #[JsonProperty('kind')]
    private ?string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @param array{
     *   kind?: ?string,
     *   ref?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->kind = $values['kind'] ?? null;
        $this->ref = $values['ref'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?string $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @param ?string $value
     */
    public function setRef(?string $value = null): self
    {
        $this->ref = $value;
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
