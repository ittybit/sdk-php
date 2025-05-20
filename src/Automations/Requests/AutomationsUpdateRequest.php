<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Automations\Types\AutomationsUpdateRequestTrigger;
use Ittybit\Types\WorkflowTaskStep;
use Ittybit\Core\Types\ArrayType;

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
     * @var ?AutomationsUpdateRequestTrigger $trigger Defines the trigger event and conditions. To clear/remove a trigger, provide null. To update, provide the new trigger object.
     */
    #[JsonProperty('trigger')]
    private ?AutomationsUpdateRequestTrigger $trigger;

    /**
     * @var ?array<WorkflowTaskStep> $workflow The updated sequence of tasks for the automation.
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    private ?array $workflow;

    /**
     * @param array{
     *   name: string,
     *   description?: ?string,
     *   trigger?: ?AutomationsUpdateRequestTrigger,
     *   workflow?: ?array<WorkflowTaskStep>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'] ?? null;
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
     * @return ?AutomationsUpdateRequestTrigger
     */
    public function getTrigger(): ?AutomationsUpdateRequestTrigger
    {
        return $this->trigger;
    }

    /**
     * @param ?AutomationsUpdateRequestTrigger $value
     */
    public function setTrigger(?AutomationsUpdateRequestTrigger $value = null): self
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
