<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationListResponseDataItemWorkflowItemRef extends JsonSerializableType
{
    /**
     * @var value-of<AutomationListResponseDataItemWorkflowItemRefKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?array<AutomationListResponseDataItemWorkflowItemRefNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationListResponseDataItemWorkflowItemRefNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: value-of<AutomationListResponseDataItemWorkflowItemRefKind>,
     *   ref?: ?string,
     *   next?: ?array<AutomationListResponseDataItemWorkflowItemRefNextItem>,
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
     * @return value-of<AutomationListResponseDataItemWorkflowItemRefKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<AutomationListResponseDataItemWorkflowItemRefKind> $value
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
     * @return ?array<AutomationListResponseDataItemWorkflowItemRefNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationListResponseDataItemWorkflowItemRefNextItem> $value
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
