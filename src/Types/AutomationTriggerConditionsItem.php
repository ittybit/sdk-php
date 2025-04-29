<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationTriggerConditionsItem extends JsonSerializableType
{
    /**
     * @var string $prop The property to check (e.g., file.type, file.size)
     */
    #[JsonProperty('prop')]
    private string $prop;

    /**
     * @var string $value The value the property must match
     */
    #[JsonProperty('value')]
    private string $value;

    /**
     * @param array{
     *   prop: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->prop = $values['prop'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function getProp(): string
    {
        return $this->prop;
    }

    /**
     * @param string $value
     */
    public function setProp(string $value): self
    {
        $this->prop = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
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
