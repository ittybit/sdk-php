<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class AutomationsListRequest extends JsonSerializableType
{
    /**
     * @var ?int $page
     */
    private ?int $page;

    /**
     * @var ?int $limit
     */
    private ?int $limit;

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
}
