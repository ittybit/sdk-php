<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationsCreateResponseDataWorkflowItemConditions extends JsonSerializableType
{
    /**
     * @var 'conditions' $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var array<AutomationsCreateResponseDataWorkflowItemConditionsConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([AutomationsCreateResponseDataWorkflowItemConditionsConditionsItem::class])]
    private array $conditions;

    /**
     * @var ?array<AutomationsCreateResponseDataWorkflowItemConditionsNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationsCreateResponseDataWorkflowItemConditionsNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: 'conditions',
     *   conditions: array<AutomationsCreateResponseDataWorkflowItemConditionsConditionsItem>,
     *   next?: ?array<AutomationsCreateResponseDataWorkflowItemConditionsNextItem>,
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
     * @return array<AutomationsCreateResponseDataWorkflowItemConditionsConditionsItem>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param array<AutomationsCreateResponseDataWorkflowItemConditionsConditionsItem> $value
     */
    public function setConditions(array $value): self
    {
        $this->conditions = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationsCreateResponseDataWorkflowItemConditionsNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationsCreateResponseDataWorkflowItemConditionsNextItem> $value
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
