<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class AutomationsCreateRequestWorkflowItem extends JsonSerializableType
{
    /**
     * @var value-of<AutomationsCreateRequestWorkflowItemKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?array<AutomationsCreateRequestWorkflowItemNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([AutomationsCreateRequestWorkflowItemNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: value-of<AutomationsCreateRequestWorkflowItemKind>,
     *   ref?: ?string,
     *   next?: ?array<AutomationsCreateRequestWorkflowItemNextItem>,
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
     * @return value-of<AutomationsCreateRequestWorkflowItemKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<AutomationsCreateRequestWorkflowItemKind> $value
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
     * @return ?array<AutomationsCreateRequestWorkflowItemNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<AutomationsCreateRequestWorkflowItemNextItem> $value
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
