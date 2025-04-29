<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

/**
 * Represents an automated workflow triggered by specific events.
 */
class Automation extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the automation
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name User-defined name for the automation
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description Optional description for the automation
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var AutomationTrigger $trigger The event and conditions that trigger this automation.
     */
    #[JsonProperty('trigger')]
    public AutomationTrigger $trigger;

    /**
     * @var array<WorkflowTaskStep> $workflow The sequence of tasks to be executed when the automation is triggered. The structure of each task object varies depending on its 'kind'.
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    public array $workflow;

    /**
     * @var value-of<AutomationStatus> $status Current status of the automation
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DateTime $created Timestamp when the automation was created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the automation was last updated
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    public DateTime $updated;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   trigger: AutomationTrigger,
     *   workflow: array<WorkflowTaskStep>,
     *   status: value-of<AutomationStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
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
    public function __toString(): string
    {
        return $this->toJson();
    }
}
