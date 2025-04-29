<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard metadata included in API responses.
 */
class Meta extends JsonSerializableType
{
    /**
     * @var ?string $id Request ID
     */
    #[JsonProperty('id')]
    private ?string $id;

    /**
     * @var ?string $orgId Organisation ID associated with the request
     */
    #[JsonProperty('org_id')]
    private ?string $orgId;

    /**
     * @var ?string $projectId Project ID associated with the request
     */
    #[JsonProperty('project_id')]
    private ?string $projectId;

    /**
     * @var ?string $object Type of the primary data object in the response (e.g., list, object)
     */
    #[JsonProperty('object')]
    private ?string $object;

    /**
     * @var ?bool $list Whether the response is a list of objects.
     */
    #[JsonProperty('list')]
    private ?bool $list;

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
     *   id?: ?string,
     *   orgId?: ?string,
     *   projectId?: ?string,
     *   object?: ?string,
     *   list?: ?bool,
     *   limit?: ?int,
     *   total?: ?int,
     *   page?: ?int,
     *   pages?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->orgId = $values['orgId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->object = $values['object'] ?? null;
        $this->list = $values['list'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->total = $values['total'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->pages = $values['pages'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param ?string $value
     */
    public function setId(?string $value = null): self
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getOrgId(): ?string
    {
        return $this->orgId;
    }

    /**
     * @param ?string $value
     */
    public function setOrgId(?string $value = null): self
    {
        $this->orgId = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param ?string $value
     */
    public function setProjectId(?string $value = null): self
    {
        $this->projectId = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * @param ?string $value
     */
    public function setObject(?string $value = null): self
    {
        $this->object = $value;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function getList(): ?bool
    {
        return $this->list;
    }

    /**
     * @param ?bool $value
     */
    public function setList(?bool $value = null): self
    {
        $this->list = $value;
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
