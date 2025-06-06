<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class Task extends JsonSerializableType
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
     * @var mixed $kind The type of operation the task performs.
     */
    #[JsonProperty('kind')]
    private mixed $kind;

    /**
     * @var ?array<string, mixed> $input The input source for the task (e.g., details of a file). Structure varies based on the task kind and preceding steps.
     */
    #[JsonProperty('input'), ArrayType(['string' => 'mixed'])]
    private ?array $input;

    /**
     * @var ?array<string, mixed> $options Configuration options specific to the task kind.
     */
    #[JsonProperty('options'), ArrayType(['string' => 'mixed'])]
    private ?array $options;

    /**
     * @var ?array<string, mixed> $output The result generated by the task (e.g., details of an output file or intelligence data). Structure varies.
     */
    #[JsonProperty('output'), ArrayType(['string' => 'mixed'])]
    private ?array $output;

    /**
     * @var value-of<TaskStatus> $status Current status of the task.
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
     * @var ?array<Task> $workflow Array of nested task objects representing the steps within this workflow task.
     */
    #[JsonProperty('workflow'), ArrayType([Task::class])]
    private ?array $workflow;

    /**
     * @var ?array<Task> $next Array representing subsequent tasks (e.g., in an automation). Structure may vary.
     */
    #[JsonProperty('next'), ArrayType([Task::class])]
    private ?array $next;

    /**
     * @var ?TaskResults $results
     */
    #[JsonProperty('results')]
    private ?TaskResults $results;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   kind: mixed,
     *   status: value-of<TaskStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   input?: ?array<string, mixed>,
     *   options?: ?array<string, mixed>,
     *   output?: ?array<string, mixed>,
     *   progress?: ?int,
     *   error?: ?string,
     *   createdBy?: ?string,
     *   parentId?: ?string,
     *   workflow?: ?array<Task>,
     *   next?: ?array<Task>,
     *   results?: ?TaskResults,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->kind = $values['kind'];
        $this->input = $values['input'] ?? null;
        $this->options = $values['options'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->status = $values['status'];
        $this->progress = $values['progress'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->created = $values['created'];
        $this->updated = $values['updated'];
        $this->parentId = $values['parentId'] ?? null;
        $this->workflow = $values['workflow'] ?? null;
        $this->next = $values['next'] ?? null;
        $this->results = $values['results'] ?? null;
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
     * @return mixed
     */
    public function getKind(): mixed
    {
        return $this->kind;
    }

    /**
     * @param mixed $value
     */
    public function setKind(mixed $value): self
    {
        $this->kind = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getInput(): ?array
    {
        return $this->input;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setInput(?array $value = null): self
    {
        $this->input = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setOptions(?array $value = null): self
    {
        $this->options = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getOutput(): ?array
    {
        return $this->output;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setOutput(?array $value = null): self
    {
        $this->output = $value;
        return $this;
    }

    /**
     * @return value-of<TaskStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<TaskStatus> $value
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
     * @return ?array<Task>
     */
    public function getWorkflow(): ?array
    {
        return $this->workflow;
    }

    /**
     * @param ?array<Task> $value
     */
    public function setWorkflow(?array $value = null): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return ?array<Task>
     */
    public function getNext(): ?array
    {
        return $this->next;
    }

    /**
     * @param ?array<Task> $value
     */
    public function setNext(?array $value = null): self
    {
        $this->next = $value;
        return $this;
    }

    /**
     * @return ?TaskResults
     */
    public function getResults(): ?TaskResults
    {
        return $this->results;
    }

    /**
     * @param ?TaskResults $value
     */
    public function setResults(?TaskResults $value = null): self
    {
        $this->results = $value;
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
