<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Types\WorkflowTaskStep;

class AutomationsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    private string $name;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    private ?string $description;

    /**
     * @var array<array<string, mixed>> $trigger
     */
    #[JsonProperty('trigger'), ArrayType([['string' => 'mixed']])]
    private array $trigger;

    /**
     * @var ?array<WorkflowTaskStep> $workflow The updated sequence of tasks for the automation.
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    private ?array $workflow;

    /**
     * @param array{
     *   name: string,
     *   trigger: array<array<string, mixed>>,
     *   description?: ?string,
     *   workflow?: ?array<WorkflowTaskStep>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'];
        $this->workflow = $values['workflow'] ?? null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param ?string $value
     */
    public function setDescription(?string $value = null): self
    {
        $this->description = $value;
        return $this;
    }

    /**
     * @return array<array<string, mixed>>
     */
    public function getTrigger(): array
    {
        return $this->trigger;
    }

    /**
     * @param array<array<string, mixed>> $value
     */
    public function setTrigger(array $value): self
    {
        $this->trigger = $value;
        return $this;
    }

    /**
     * @return ?array<WorkflowTaskStep>
     */
    public function getWorkflow(): ?array
    {
        return $this->workflow;
    }

    /**
     * @param ?array<WorkflowTaskStep> $value
     */
    public function setWorkflow(?array $value = null): self
    {
        $this->workflow = $value;
        return $this;
    }
}
