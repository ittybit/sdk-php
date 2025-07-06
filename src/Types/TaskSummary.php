<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;

class TaskSummary extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    private string $id;

    /**
     * @var string $object
     */
    #[JsonProperty('object')]
    private string $object;

    /**
     * @var value-of<TaskSummaryKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var value-of<TaskSummaryStatus> $status
     */
    #[JsonProperty('status')]
    private string $status;

    /**
     * @var ?int $progress
     */
    #[JsonProperty('progress')]
    private ?int $progress;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    private ?string $error;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('created_by')]
    private ?string $createdBy;

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
     * @var ?string $parentId
     */
    #[JsonProperty('parent_id')]
    private ?string $parentId;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   kind: value-of<TaskSummaryKind>,
     *   status: value-of<TaskSummaryStatus>,
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
     * @return value-of<TaskSummaryKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<TaskSummaryKind> $value
     */
    public function setKind(string $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return value-of<TaskSummaryStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<TaskSummaryStatus> $value
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
