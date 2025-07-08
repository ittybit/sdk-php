<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Automations\Types\AutomationsCreateRequestTrigger;
use Ittybit\Types\WorkflowTaskStep;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Automations\Types\AutomationsCreateRequestStatus;

class AutomationsCreateRequest extends JsonSerializableType
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
     * @var AutomationsCreateRequestTrigger $trigger
     */
    #[JsonProperty('trigger')]
    private AutomationsCreateRequestTrigger $trigger;

    /**
     * @var array<WorkflowTaskStep> $workflow
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    private array $workflow;

    /**
     * @var ?value-of<AutomationsCreateRequestStatus> $status
     */
    #[JsonProperty('status')]
    private ?string $status;

    /**
     * @param array{
     *   trigger: AutomationsCreateRequestTrigger,
     *   workflow: array<WorkflowTaskStep>,
     *   name?: ?string,
     *   description?: ?string,
     *   status?: ?value-of<AutomationsCreateRequestStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'];
        $this->workflow = $values['workflow'];
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
     * @return AutomationsCreateRequestTrigger
     */
    public function getTrigger(): AutomationsCreateRequestTrigger
    {
        return $this->trigger;
    }

    /**
     * @param AutomationsCreateRequestTrigger $value
     */
    public function setTrigger(AutomationsCreateRequestTrigger $value): self
    {
        $this->trigger = $value;
        return $this;
    }

    /**
     * @return array<WorkflowTaskStep>
     */
    public function getWorkflow(): array
    {
        return $this->workflow;
    }

    /**
     * @param array<WorkflowTaskStep> $value
     */
    public function setWorkflow(array $value): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return ?value-of<AutomationsCreateRequestStatus>
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param ?value-of<AutomationsCreateRequestStatus> $value
     */
    public function setStatus(?string $value = null): self
    {
        $this->status = $value;
        return $this;
    }
}
