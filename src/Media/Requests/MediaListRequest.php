<?php

namespace Ittybit\Media\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class MediaListRequest extends JsonSerializableType
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
     * @var '2025-08-20' $acceptVersion Specifies the API Version
     */
    private string $acceptVersion;

    /**
     * @param array{
     *   acceptVersion: '2025-08-20',
     *   page?: ?int,
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->acceptVersion = $values['acceptVersion'];
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
     * @return '2025-08-20'
     */
    public function getAcceptVersion(): string
    {
        return $this->acceptVersion;
    }

    /**
     * @param '2025-08-20' $value
     */
    public function setAcceptVersion(string $value): self
    {
        $this->acceptVersion = $value;
        return $this;
    }
}
