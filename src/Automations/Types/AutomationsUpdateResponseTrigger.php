<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsUpdateResponseTrigger extends JsonSerializableType
{
    /**
     * @var 'event' $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var 'media.created' $event
     */
    #[JsonProperty('event')]
    private string $event;

    /**
     * @param array{
     *   kind: 'event',
     *   event: 'media.created',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->event = $values['event'];
    }

    /**
     * @return 'event'
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param 'event' $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return 'media.created'
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param 'media.created' $value
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
