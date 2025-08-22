<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use DateTime;
use Ittybit\Core\Types\Date;

class TasksGetResponse extends JsonSerializableType
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
     * @var value-of<TasksGetResponseKind> $kind
     */
    #[JsonProperty('kind')]
    private string $kind;

    /**
     * @var ?array<string, mixed> $input
     */
    #[JsonProperty('input'), ArrayType(['string' => 'mixed'])]
    private ?array $input;

    /**
     * @var ?array<string, mixed> $options
     */
    #[JsonProperty('options'), ArrayType(['string' => 'mixed'])]
    private ?array $options;

    /**
     * @var ?array<string, mixed> $output
     */
    #[JsonProperty('output'), ArrayType(['string' => 'mixed'])]
    private ?array $output;

    /**
     * @var value-of<TasksGetResponseStatus> $status
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
     * @var ?array<mixed> $workflow
     */
    #[JsonProperty('workflow'), ArrayType(['mixed'])]
    private ?array $workflow;

    /**
     * @var ?TasksGetResponseResults $results
     */
    #[JsonProperty('results')]
    private ?TasksGetResponseResults $results;

    /**
     * @param array{
     *   id: string,
     *   object: string,
     *   kind: value-of<TasksGetResponseKind>,
     *   status: value-of<TasksGetResponseStatus>,
     *   created: DateTime,
     *   updated: DateTime,
     *   input?: ?array<string, mixed>,
     *   options?: ?array<string, mixed>,
     *   output?: ?array<string, mixed>,
     *   progress?: ?int,
     *   error?: ?string,
     *   createdBy?: ?string,
     *   parentId?: ?string,
     *   workflow?: ?array<mixed>,
     *   results?: ?TasksGetResponseResults,
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
     * @return value-of<TasksGetResponseKind>
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param value-of<TasksGetResponseKind> $value
     */
    public function setKind(string $value): self
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
     * @return value-of<TasksGetResponseStatus>
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param value-of<TasksGetResponseStatus> $value
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
     * @return ?array<mixed>
     */
    public function getWorkflow(): ?array
    {
        return $this->workflow;
    }

    /**
     * @param ?array<mixed> $value
     */
    public function setWorkflow(?array $value = null): self
    {
        $this->workflow = $value;
        return $this;
    }

    /**
     * @return ?TasksGetResponseResults
     */
    public function getResults(): ?TasksGetResponseResults
    {
        return $this->results;
    }

    /**
     * @param ?TasksGetResponseResults $value
     */
    public function setResults(?TasksGetResponseResults $value = null): self
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
