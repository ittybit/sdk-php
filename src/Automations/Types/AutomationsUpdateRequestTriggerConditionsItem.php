<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsUpdateRequestTriggerConditionsItem extends JsonSerializableType
{
    /**
     * @var string $prop
     */
    #[JsonProperty('prop')]
    private string $prop;

    /**
     * @var string $value
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
