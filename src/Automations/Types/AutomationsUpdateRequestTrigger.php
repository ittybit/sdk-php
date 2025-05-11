<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

/**
 * Defines the trigger event and conditions. To clear/remove a trigger, provide null. To update, provide the new trigger object.
 */
class AutomationsUpdateRequestTrigger extends JsonSerializableType
{
    /**
     * @var ?string $event The event that triggers the automation
     */
    #[JsonProperty('event')]
    private ?string $event;

    /**
     * @var ?array<AutomationsUpdateRequestTriggerConditionsItem> $conditions Conditions that must be met for the trigger to activate.
     */
    #[JsonProperty('conditions'), ArrayType([AutomationsUpdateRequestTriggerConditionsItem::class])]
    private ?array $conditions;

    /**
     * @param array{
     *   event?: ?string,
     *   conditions?: ?array<AutomationsUpdateRequestTriggerConditionsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->event = $values['event'] ?? null;
        $this->conditions = $values['conditions'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * @param ?string $value
     */
    public function setEvent(?string $value = null): self
    {
        $this->event = $value;
        return $this;
    }

    /**
     * @return ?array<AutomationsUpdateRequestTriggerConditionsItem>
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * @param ?array<AutomationsUpdateRequestTriggerConditionsItem> $value
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
