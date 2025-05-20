<?php

namespace Ittybit\Tasks\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Tasks\Types\TasksListRequestStatus;
use Ittybit\Tasks\Types\TasksListRequestKind;

class TasksListRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Items per page.
     */
    private ?int $limit;

    /**
     * @var ?value-of<TasksListRequestStatus> $status Filter by task status.
     */
    private ?string $status;

    /**
     * @var ?value-of<TasksListRequestKind> $kind Filter by task kind.
     */
    private ?string $kind;

    /**
     * @param array{
     *   limit?: ?int,
     *   status?: ?value-of<TasksListRequestStatus>,
     *   kind?: ?value-of<TasksListRequestKind>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->kind = $values['kind'] ?? null;
    }

    /**
     * @return ?int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param ?int $value
     */
    public function setLimit(?int $value = null): self
    {
        $this->limit = $value;
        return $this;
    }

    /**
     * @return ?value-of<TasksListRequestStatus>
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param ?value-of<TasksListRequestStatus> $value
     */
    public function setStatus(?string $value = null): self
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return ?value-of<TasksListRequestKind>
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?value-of<TasksListRequestKind> $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
        return $this;
    }
}
