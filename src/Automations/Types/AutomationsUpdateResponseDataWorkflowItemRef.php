<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationsUpdateResponseDataWorkflowItemRef extends JsonSerializableType
{
    /**
     * @var value-of<AutomationsUpdateResponseDataWorkflowItemRefKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?array<AutomationsUpdateResponseDataWorkflowItemRefNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationsUpdateResponseDataWorkflowItemRefNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: value-of<AutomationsUpdateResponseDataWorkflowItemRefKind>,
     *   ref?: ?string,
     *   next?: ?array<AutomationsUpdateResponseDataWorkflowItemRefNextItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->ref = $values['ref'] ?? null;
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return value-of<AutomationsUpdateResponseDataWorkflowItemRefKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<AutomationsUpdateResponseDataWorkflowItemRefKind> $value
     */
    public function setKind(string $value): self
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
     * @return ?array<AutomationsUpdateResponseDataWorkflowItemRefNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationsUpdateResponseDataWorkflowItemRefNextItem> $value
     */
    public function setNext(?array $value = null): self
    {
        $this->next = $value;
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
