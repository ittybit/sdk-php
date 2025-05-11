<?php

namespace Ittybit\Automations\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class AutomationsGetResponseMeta extends JsonSerializableType
{
    /**
     * @var ?string $requestId Request ID
     */
    #[JsonProperty('request_id')]
    private ?string $requestId;

    /**
     * @var ?string $type Type of the primary data object in the response (e.g., list, object)
     */
    #[JsonProperty('type')]
    private ?string $type;

    /**
     * @var ?int $limit Number of items per page.
     */
    #[JsonProperty('limit')]
    private ?int $limit;

    /**
     * @var ?int $total Total number of items matching the query.
     */
    #[JsonProperty('total')]
    private ?int $total;

    /**
     * @var ?int $page Current page number.
     */
    #[JsonProperty('page')]
    private ?int $page;

    /**
     * @var ?int $pages Total number of pages.
     */
    #[JsonProperty('pages')]
    private ?int $pages;

    /**
     * @param array{
     *   requestId?: ?string,
     *   type?: ?string,
     *   limit?: ?int,
     *   total?: ?int,
     *   page?: ?int,
     *   pages?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->requestId = $values['requestId'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->total = $values['total'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->pages = $values['pages'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param ?string $value
     */
    public function setRequestId(?string $value = null): self
    {
        $this->requestId = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param ?string $value
     */
    public function setType(?string $value = null): self
    {
        $this->type = $value;
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
     * @return ?int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param ?int $value
     */
    public function setTotal(?int $value = null): self
    {
        $this->total = $value;
        return $this;
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
    public function getPages(): ?int
    {
        return $this->pages;
    }

    /**
     * @param ?int $value
     */
    public function setPages(?int $value = null): self
    {
        $this->pages = $value;
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
