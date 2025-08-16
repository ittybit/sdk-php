<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationListResponseDataItemWorkflowItemConditions extends JsonSerializableType
{
    /**
     * @var 'conditions' $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var array<AutomationListResponseDataItemWorkflowItemConditionsConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([AutomationListResponseDataItemWorkflowItemConditionsConditionsItem::class])]
    private array $conditions;

    /**
     * @var ?array<AutomationListResponseDataItemWorkflowItemConditionsNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationListResponseDataItemWorkflowItemConditionsNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: 'conditions',
     *   conditions: array<AutomationListResponseDataItemWorkflowItemConditionsConditionsItem>,
     *   next?: ?array<AutomationListResponseDataItemWorkflowItemConditionsNextItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->conditions = $values['conditions'];
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return 'conditions'
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param 'conditions' $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return array<AutomationListResponseDataItemWorkflowItemConditionsConditionsItem>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param array<AutomationListResponseDataItemWorkflowItemConditionsConditionsItem> $value
     */
    public function setConditions(array $value): self
    {
        $this->conditions = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationListResponseDataItemWorkflowItemConditionsNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationListResponseDataItemWorkflowItemConditionsNextItem> $value
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
