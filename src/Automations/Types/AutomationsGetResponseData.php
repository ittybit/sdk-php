<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Core\Types\Union;
use DateTime;
use Ittybit\Core\Types\Date;

class AutomationsGetResponseData extends JsonSerializableType
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
     * @var AutomationsGetResponseDataTrigger $trigger
     */
    #[JsonProperty('trigger')]
    private AutomationsGetResponseDataTrigger $trigger;

    /**
     * @var array<(
     *    AutomationsGetResponseDataWorkflowItemRef
     *   |AutomationsGetResponseDataWorkflowItemConditions
     * )> $workflow
     */
    #[JsonProperty('workflow'), ArrayType([new Union(AutomationsGetResponseDataWorkflowItemRef::class, AutomationsGetResponseDataWorkflowItemConditions::class)])]
    private array $workflow;

    /**
     * @var value-of<AutomationsGetResponseDataStatus> $status
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
     *   trigger: AutomationsGetResponseDataTrigger,
     *   workflow: array<(
     *    AutomationsGetResponseDataWorkflowItemRef
     *   |AutomationsGetResponseDataWorkflowItemConditions
     * )>,
     *   status: value-of<AutomationsGetResponseDataStatus>,
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
     * @return AutomationsGetResponseDataTrigger
     */
    public function getTrigger(): AutomationsGetResponseDataTrigger
    {
        return $this->trigger;
    }

    /**
     * @param AutomationsGetResponseDataTrigger $value
     */
    public function setTrigger(AutomationsGetResponseDataTrigger $value): self
    {
        $this->trigger = $value;
        return $this;
    }

    /**
     * @return array<(
     *    AutomationsGetResponseDataWorkflowItemRef
     *   |AutomationsGetResponseDataWorkflowItemConditions
     * )>
     */
    public function getWorkflow(): array
    {
        return $this->workflow;
    }

    /**
     * @param array<(
     *    AutomationsGetResponseDataWorkflowItemRef
     *   |AutomationsGetResponseDataWorkflowItemConditions
     * )> $value
     */
    public function setWorkflow(array $value): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return value-of<AutomationsGetResponseDataStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<AutomationsGetResponseDataStatus> $value
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
