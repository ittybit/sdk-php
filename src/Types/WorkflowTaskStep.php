<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class WorkflowTaskStep extends JsonSerializableType
{
    /**
     * @var value-of<WorkflowTaskStepKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?string $ref
     */
    #[JsonProperty('ref')]
    private ?string $ref;

    /**
     * @var ?array<WorkflowTaskStepNextItem> $next
     */
    #[JsonProperty('next'), ArrayType([WorkflowTaskStepNextItem::class])]
    private ?array $next;

    /**
     * @param array{
     *   kind: value-of<WorkflowTaskStepKind>,
     *   ref?: ?string,
     *   next?: ?array<WorkflowTaskStepNextItem>,
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
     * @return value-of<WorkflowTaskStepKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<WorkflowTaskStepKind> $value
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
     * @return ?array<WorkflowTaskStepNextItem>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<WorkflowTaskStepNextItem> $value
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
