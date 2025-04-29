<?php

namespace Ittybit\Tasks\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Tasks\Types\TasksListFilteredRequestStatus;
use Ittybit\Tasks\Types\TasksListFilteredRequestKind;

class TasksListFilteredRequest extends JsonSerializableType
{
    /**
     * @var ?int $page Page number.
     */
    private ?int $page;

    /**
     * @var ?int $limit Items per page.
     */
    private ?int $limit;

    /**
     * @var ?value-of<TasksListFilteredRequestStatus> $status Filter by task status.
     */
    private ?string $status;

    /**
     * @var ?value-of<TasksListFilteredRequestKind> $kind Filter by task kind.
     */
    private ?string $kind;

    /**
     * @param array{
     *   page?: ?int,
     *   limit?: ?int,
     *   status?: ?value-of<TasksListFilteredRequestStatus>,
     *   kind?: ?value-of<TasksListFilteredRequestKind>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->kind = $values['kind'] ?? null;
    }

    /**
     * @return ?int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param ?int $value
     */
    public function setPage(?int $value = null): self
    {
        $this->page = $value;
        return $this;
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
     * @return ?value-of<TasksListFilteredRequestStatus>
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param ?value-of<TasksListFilteredRequestStatus> $value
     */
    public function setStatus(?string $value = null): self
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @return ?value-of<TasksListFilteredRequestKind>
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param ?value-of<TasksListFilteredRequestKind> $value
     */
    public function setKind(?string $value = null): self
    {
        $this->kind = $value;
        return $this;
    }
}
