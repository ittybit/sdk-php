<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use DateTime;
use Ittybit\Core\Types\Date;

class MediaGetResponseMeta extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    private ?string $id;

    /**
     * @var ?string $method
     */
    #[JsonProperty('method')]
    private ?string $method;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    private ?string $url;

    /**
     * @var ?string $version
     */
    #[JsonProperty('version')]
    private ?string $version;

    /**
     * @var ?int $status
     */
    #[JsonProperty('status')]
    private ?int $status;

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
     * @var ?string $object
     */
    #[JsonProperty('object')]
    private ?string $object;

    /**
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    private ?DateTime $created;

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
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param ?string $value
     */
    public function setMethod(?string $value = null): self
    {
        $this->method = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param ?string $value
     */
    public function setUrl(?string $value = null): self
    {
        $this->url = $value;
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
     * @return ?int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param ?int $value
     */
    public function setStatus(?int $value = null): self
    {
        $this->status = $value;
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
     * @return ?DateTime
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param ?DateTime $value
     */
    public function setCreated(?DateTime $value = null): self
    {
        $this->created = $value;
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
