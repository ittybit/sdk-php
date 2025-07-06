<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MetaList extends JsonSerializableType
{
    /**
     * @var ?string $requestId
     */
    #[JsonProperty('request_id')]
    private ?string $requestId;

    /**
     * @var ?string $orgId
     */
    #[JsonProperty('org_id')]
    private ?string $orgId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('project_id')]
    private ?string $projectId;

    /**
     * @var ?string $version
     */
    #[JsonProperty('version')]
    private ?string $version;

    /**
     * @var ?value-of<MetaListType> $type
     */
    #[JsonProperty('type')]
    private ?string $type;

    /**
     * @var ?int $limit
     */
    #[JsonProperty('limit')]
    private ?int $limit;

    /**
     * @var ?int $total
     */
    #[JsonProperty('total')]
    private ?int $total;

    /**
     * @var ?int $page
     */
    #[JsonProperty('page')]
    private ?int $page;

    /**
     * @var ?int $pages
     */
    #[JsonProperty('pages')]
    private ?int $pages;

    /**
     * @param array{
     *   requestId?: ?string,
     *   orgId?: ?string,
     *   projectId?: ?string,
     *   version?: ?string,
     *   type?: ?value-of<MetaListType>,
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
        $this->orgId = $values['orgId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->version = $values['version'] ?? null;
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
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param ?string $value
     */
    public function setVersion(?string $value = null): self
    {
        $this->version = $value;
        return $this;
    }

    /**
     * @return ?value-of<MetaListType>
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param ?value-of<MetaListType> $value
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
