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
    public ?int $page;

    /**
     * @var ?int $limit Items per page.
     */
    public ?int $limit;

    /**
     * @var ?value-of<TasksListFilteredRequestStatus> $status Filter by task status.
     */
    public ?string $status;

    /**
     * @var ?value-of<TasksListFilteredRequestKind> $kind Filter by task kind.
     */
    public ?string $kind;

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
}
