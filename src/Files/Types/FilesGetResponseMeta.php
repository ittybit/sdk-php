<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;

class FilesGetResponseMeta extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?string $version
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @var ?int $status
     */
    #[JsonProperty('status')]
    public ?int $status;

    /**
     * @var ?string $orgId
     */
    #[JsonProperty('org_id')]
    public ?string $orgId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('project_id')]
    public ?string $projectId;

    /**
     * @var ?string $object
     */
    #[JsonProperty('object')]
    public ?string $object;

    /**
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $created;

    /**
     * @param array{
     *   id?: ?string,
     *   method?: ?string,
     *   url?: ?string,
     *   version?: ?string,
     *   status?: ?int,
     *   orgId?: ?string,
     *   projectId?: ?string,
     *   object?: ?string,
     *   created?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->method = $values['method'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->version = $values['version'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->orgId = $values['orgId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->object = $values['object'] ?? null;
        $this->created = $values['created'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
