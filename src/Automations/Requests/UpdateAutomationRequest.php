<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Automations\Types\UpdateAutomationRequestTrigger;
use Ittybit\Types\WorkflowTaskStep;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Automations\Types\UpdateAutomationRequestStatus;

class UpdateAutomationRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    private ?string $name;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    private ?string $description;

    /**
     * @var ?UpdateAutomationRequestTrigger $trigger
     */
    #[JsonProperty('trigger')]
    private ?UpdateAutomationRequestTrigger $trigger;

    /**
     * @var ?array<WorkflowTaskStep> $workflow
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    private ?array $workflow;

    /**
     * @var ?value-of<UpdateAutomationRequestStatus> $status
     */
    #[JsonProperty('status')]
    private ?string $status;

    /**
     * @param array{
     *   name?: ?string,
     *   description?: ?string,
     *   trigger?: ?UpdateAutomationRequestTrigger,
     *   workflow?: ?array<WorkflowTaskStep>,
     *   status?: ?value-of<UpdateAutomationRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'] ?? null;
        $this->workflow = $values['workflow'] ?? null;
        $this->status = $values['status'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param ?string $value
     */
    public function setName(?string $value = null): self
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
     * @return ?UpdateAutomationRequestTrigger
     */
    public function getTrigger(): ?UpdateAutomationRequestTrigger
    {
        return $this->trigger;
    }

    /**
     * @param ?UpdateAutomationRequestTrigger $value
     */
    public function setTrigger(?UpdateAutomationRequestTrigger $value = null): self
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

    /**
     * @return ?value-of<UpdateAutomationRequestStatus>
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param ?value-of<UpdateAutomationRequestStatus> $value
     */
    public function setStatus(?string $value = null): self
    {
        $this->status = $value;
        return $this;
    }
}
