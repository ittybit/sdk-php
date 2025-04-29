<?php

namespace Ittybit\Files\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class FilesListRequest extends JsonSerializableType
{
    /**
     * @var ?int $page Page number
     */
    public ?int $page;

    /**
     * @var ?int $limit Items per page
     */
    public ?int $limit;

    /**
     * @param array{
     *   page?: ?int,
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->limit = $values['limit'] ?? null;
    }
}
