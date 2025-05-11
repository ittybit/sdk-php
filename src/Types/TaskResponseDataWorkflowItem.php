<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;

class TaskResponseDataWorkflowItem extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for the task.
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $object Object type, always 'task'.
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var value-of<TaskResponseDataWorkflowItemKind> $kind The type of operation the task performs.
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var value-of<TaskResponseDataWorkflowItemStatus> $status Current status of the task.
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @var ?int $progress Task progress percentage.
     */
    #[JsonProperty('progress')]
    private ?int $progress;

    /**
     * @var ?string $error Error message if the task failed.
     */
    #[JsonProperty('error')]
    private ?string $error;

    /**
     * @var ?string $createdBy ID of the entity that created the task (e.g., user ID, automation ID).
     */
    #[JsonProperty('created_by')]
    private ?string $createdBy;

    /**
     * @var DateTime $created Timestamp when the task was created.
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private DateTime $created;

    /**
     * @var DateTime $updated Timestamp when the task was last updated.
     */
    #[JsonProperty('updated'), Date(Date::TYPE_DATETIME)]
    private DateTime $updated;

    /**
     * @var ?string $parentId ID of the parent task if this is part of a workflow.
     */
    #[JsonProperty('parent_id')]
    private ?string $parentId;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   kind: value-of<TaskResponseDataWorkflowItemKind>,
     *   status: value-of<TaskResponseDataWorkflowItemStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   progress?: ?int,
     *   error?: ?string,
     *   createdBy?: ?string,
     *   parentId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->kind = $values['kind'];
        $this->status = $values['status'];
        $this->progress = $values['progress'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->created = $values['created'];
        $this->updated = $values['updated'];
        $this->parentId = $values['parentId'] ?? null;
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
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $value
     */
    public function setObject(string $value): self
    {
        $this->object = $value;
        return $this;
    }

    /**
     * @return value-of<TaskResponseDataWorkflowItemKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<TaskResponseDataWorkflowItemKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return value-of<TaskResponseDataWorkflowItemStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<TaskResponseDataWorkflowItemStatus> $value
     */
    public function setStatus(string $value): self
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return ?int
     */
    public function getProgress(): ?int
    {
        return $this->progress;
    }

    /**
     * @param ?int $value
     */
    public function setProgress(?int $value = null): self
    {
        $this->progress = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param ?string $value
     */
    public function setError(?string $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param ?string $value
     */
    public function setCreatedBy(?string $value = null): self
    {
        $this->createdBy = $value;
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
     * @return ?string
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param ?string $value
     */
    public function setParentId(?string $value = null): self
    {
        $this->parentId = $value;
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
