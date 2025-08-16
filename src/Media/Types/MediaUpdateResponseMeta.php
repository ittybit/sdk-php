<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class MediaUpdateResponseMeta extends JsonSerializableType
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
     * @var ?value-of<MediaUpdateResponseMetaType> $type
     */
    #[JsonProperty('type')]
    private ?string $type;

    /**
     * @param array{
     *   requestId?: ?string,
     *   orgId?: ?string,
     *   projectId?: ?string,
     *   version?: ?string,
     *   type?: ?value-of<MediaUpdateResponseMetaType>,
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
     * @return ?value-of<MediaUpdateResponseMetaType>
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param ?value-of<MediaUpdateResponseMetaType> $value
     */
    public function setType(?string $value = null): self
    {
        $this->type = $value;
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
