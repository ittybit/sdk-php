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
    public ?string $id;

    /**
     * @var ?string $orgId Organisation ID associated with the request
     */
    #[JsonProperty('org_id')]
    public ?string $orgId;

    /**
     * @var ?string $projectId Project ID associated with the request
     */
    #[JsonProperty('project_id')]
    public ?string $projectId;

    /**
     * @var ?string $object Type of the primary data object in the response (e.g., list, object)
     */
    #[JsonProperty('object')]
    public ?string $object;

    /**
     * @var ?bool $list Whether the response is a list of objects.
     */
    #[JsonProperty('list')]
    public ?bool $list;

    /**
     * @var ?int $limit Number of items per page.
     */
    #[JsonProperty('limit')]
    public ?int $limit;

    /**
     * @var ?int $total Total number of items matching the query.
     */
    #[JsonProperty('total')]
    public ?int $total;

    /**
     * @var ?int $page Current page number.
     */
    #[JsonProperty('page')]
    public ?int $page;

    /**
     * @var ?int $pages Total number of pages.
     */
    #[JsonProperty('pages')]
    public ?int $pages;

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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
