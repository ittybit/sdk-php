<?php

namespace Ittybit\Example\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class GetApiExampleResponseMeta extends JsonSerializableType
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
     * @var ?int $status
     */
    #[JsonProperty('status')]
    private ?int $status;

    /**
     * @param array{
     *   id?: ?string,
     *   method?: ?string,
     *   url?: ?string,
     *   status?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->method = $values['method'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->status = $values['status'] ?? null;
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
