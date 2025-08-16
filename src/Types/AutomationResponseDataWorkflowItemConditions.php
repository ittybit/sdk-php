<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationResponseDataWorkflowItemConditions extends JsonSerializableType
{
    /**
     * @var 'conditions' $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var array<AutomationResponseDataWorkflowItemConditionsConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([AutomationResponseDataWorkflowItemConditionsConditionsItem::class])]
    private array $conditions;

    /**
     * @var ?array<AutomationResponseDataWorkflowItemConditionsNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationResponseDataWorkflowItemConditionsNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: 'conditions',
     *   conditions: array<AutomationResponseDataWorkflowItemConditionsConditionsItem>,
     *   next?: ?array<AutomationResponseDataWorkflowItemConditionsNextItem>,
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
     * @return array<AutomationResponseDataWorkflowItemConditionsConditionsItem>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param array<AutomationResponseDataWorkflowItemConditionsConditionsItem> $value
     */
    public function setConditions(array $value): self
    {
        $this->conditions = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationResponseDataWorkflowItemConditionsNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationResponseDataWorkflowItemConditionsNextItem> $value
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
