<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Automations\Types\AutomationsUpdateRequestTrigger;
use Ittybit\Types\WorkflowTaskStep;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Automations\Types\AutomationsUpdateRequestStatus;

class AutomationsUpdateRequest extends JsonSerializableType
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
     * @var ?AutomationsUpdateRequestTrigger $trigger
     */
    #[JsonProperty('trigger')]
    private ?AutomationsUpdateRequestTrigger $trigger;

    /**
     * @var ?array<WorkflowTaskStep> $workflow
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    private ?array $workflow;

    /**
     * @var ?value-of<AutomationsUpdateRequestStatus> $status
     */
    #[JsonProperty('status')]
    private ?string $status;

    /**
     * @param array{
     *   name?: ?string,
     *   description?: ?string,
     *   trigger?: ?AutomationsUpdateRequestTrigger,
     *   workflow?: ?array<WorkflowTaskStep>,
     *   status?: ?value-of<AutomationsUpdateRequestStatus>,
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

    /**
     * @return ?value-of<AutomationsUpdateRequestStatus>
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param ?value-of<AutomationsUpdateRequestStatus> $value
     */
    public function setStatus(?string $value = null): self
    {
        $this->status = $value;
        return $this;
    }
}
