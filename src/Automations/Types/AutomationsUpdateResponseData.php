<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class AutomationsUpdateResponseData extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the automation
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $name User-defined name for the automation
     */
    #[JsonProperty('name')]
    private string $name;

    /**
     * @var ?string $description Optional description for the automation
     */
    #[JsonProperty('description')]
    private ?string $description;

    /**
     * @var ?array<string, mixed> $metadata User-defined key-value metadata for the automation.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var AutomationsUpdateResponseDataTrigger $trigger The event and conditions that trigger this automation.
     */
    #[JsonProperty('trigger')]
    private AutomationsUpdateResponseDataTrigger $trigger;

    /**
     * @var array<AutomationsUpdateResponseDataWorkflowItem> $workflow The sequence of tasks to be executed when the automation is triggered. The structure of each task object varies depending on its 'kind'.
     */
    #[JsonProperty('workflow'), ArrayType([AutomationsUpdateResponseDataWorkflowItem::class])]
    private array $workflow;

    /**
     * @var value-of<AutomationsUpdateResponseDataStatus> $status Current status of the automation
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @var DateTime $created Timestamp when the automation was created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the automation was last updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   trigger: AutomationsUpdateResponseDataTrigger,
     *   workflow: array<AutomationsUpdateResponseDataWorkflowItem>,
     *   status: value-of<AutomationsUpdateResponseDataStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   description?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
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
     * @return ?array<string, mixed>
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setMetadata(?array $value = null): self
    {
        $this->metadata = $value;
        return $this;
    }

    /**
     * @return AutomationsUpdateResponseDataTrigger
     */
    public function getTrigger(): AutomationsUpdateResponseDataTrigger
    {
        return $this->trigger;
    }

    /**
     * @param AutomationsUpdateResponseDataTrigger $value
     */
    public function setTrigger(AutomationsUpdateResponseDataTrigger $value): self
    {
        $this->trigger = $value;
        return $this;
    }

    /**
     * @return array<AutomationsUpdateResponseDataWorkflowItem>
     */
    public function getWorkflow(): array
    {
        return $this->workflow;
    }

    /**
     * @param array<AutomationsUpdateResponseDataWorkflowItem> $value
     */
    public function setWorkflow(array $value): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return value-of<AutomationsUpdateResponseDataStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<AutomationsUpdateResponseDataStatus> $value
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
