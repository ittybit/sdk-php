<?php

namespace Ittybit\Media\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class MediaListRequest extends JsonSerializableType
{
    /**
     * @var ?int $page Page number for pagination.
     */
    public ?int $page;

    /**
     * @var ?int $limit Number of media items to return per page.
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
