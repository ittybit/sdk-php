<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

/**
 * The event and conditions that trigger this automation.
 */
class AutomationsUpdateResponseDataTrigger extends JsonSerializableType
{
    /**
     * @var string $event The event that triggers the automation
     */
    #[JsonProperty('event')]
    private string $event;

    /**
     * @var ?array<AutomationsUpdateResponseDataTriggerConditionsItem> $conditions Conditions that must be met for the trigger to activate.
     */
    #[JsonProperty('conditions'), ArrayType([AutomationsUpdateResponseDataTriggerConditionsItem::class])]
    private ?array $conditions;

    /**
     * @param array{
     *   event: string,
     *   conditions?: ?array<AutomationsUpdateResponseDataTriggerConditionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->event = $values['event'];
        $this->conditions = $values['conditions'] ?? null;
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param string $value
     */
    public function setEvent(string $value): self
    {
        $this->event = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationsUpdateResponseDataTriggerConditionsItem>
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * @param ?array<AutomationsUpdateResponseDataTriggerConditionsItem> $value
     */
    public function setConditions(?array $value = null): self
    {
        $this->conditions = $value;
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
