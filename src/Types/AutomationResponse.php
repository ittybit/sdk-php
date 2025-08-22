<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Core\Types\Union;
use DateTime;
use Ittybit\Core\Types\Date;

class AutomationResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    private string $id;

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
     * @var AutomationResponseTrigger $trigger
     */
    #[JsonProperty('trigger')]
    private AutomationResponseTrigger $trigger;

    /**
     * @var array<(
     *    AutomationResponseWorkflowItemRef
     *   |AutomationResponseWorkflowItemConditions
     * )> $workflow
     */
    #[JsonProperty('workflow'), ArrayType([new Union(AutomationResponseWorkflowItemRef::class, AutomationResponseWorkflowItemConditions::class)])]
    private array $workflow;

    /**
     * @var value-of<AutomationResponseStatus> $status
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @var DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @param array{
     *   id: string,
     *   trigger: AutomationResponseTrigger,
     *   workflow: array<(
     *    AutomationResponseWorkflowItemRef
     *   |AutomationResponseWorkflowItemConditions
     * )>,
     *   status: value-of<AutomationResponseStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   name?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'];
        $this->workflow = $values['workflow'];
        $this->status = $values['status'];
        $this->created = $values['created'];
        $this->updated = $values['updated'];
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $value
     */
    public function setId(string $value): self
    {
        $this->id = $value;
        return $this;
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
     * @return AutomationResponseTrigger
     */
    public function getTrigger(): AutomationResponseTrigger
    {
        return $this->trigger;
    }

    /**
     * @param AutomationResponseTrigger $value
     */
    public function setTrigger(AutomationResponseTrigger $value): self
    {
        $this->trigger = $value;
        return $this;
    }

    /**
     * @return array<(
     *    AutomationResponseWorkflowItemRef
     *   |AutomationResponseWorkflowItemConditions
     * )>
     */
    public function getWorkflow(): array
    {
        return $this->workflow;
    }

    /**
     * @param array<(
     *    AutomationResponseWorkflowItemRef
     *   |AutomationResponseWorkflowItemConditions
     * )> $value
     */
    public function setWorkflow(array $value): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return value-of<AutomationResponseStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<AutomationResponseStatus> $value
     */
    public function setStatus(string $value): self
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $value
     */
    public function setCreated(DateTime $value): self
    {
        $this->created = $value;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated(): DateTime
    {
        return $this->updated;
    }

    /**
     * @param DateTime $value
     */
    public function setUpdated(DateTime $value): self
    {
        $this->updated = $value;
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
