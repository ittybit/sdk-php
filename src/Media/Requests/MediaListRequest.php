<?php

namespace Ittybit\Media\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class MediaListRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number of media items to return per page.
     */
    private ?int $limit;

    /**
     * @param array{
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
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
}
