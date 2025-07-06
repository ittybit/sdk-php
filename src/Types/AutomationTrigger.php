<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationTrigger extends JsonSerializableType
{
    /**
     * @var ?'event' $kind
     */
    #[JsonProperty('kind')]
    private ?string $kind;

    /**
     * @var string $event
     */
    #[JsonProperty('event')]
    private string $event;

    /**
     * @param array{
     *   event: string,
     *   kind?: ?'event',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'] ?? null;
        $this->event = $values['event'];
    }

    /**
     * @return ?'event'
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?'event' $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
        return $this;
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
