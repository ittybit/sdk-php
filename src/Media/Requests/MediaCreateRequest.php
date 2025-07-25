<?php

namespace Ittybit\Media\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class MediaCreateRequest extends JsonSerializableType
{
    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    private ?string $title;

    /**
     * @var ?string $alt
     */
    #[JsonProperty('alt')]
    private ?string $alt;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @param array{
     *   title?: ?string,
     *   alt?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->title = $values['title'] ?? null;
        $this->alt = $values['alt'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param ?string $value
     */
    public function setTitle(?string $value = null): self
    {
        $this->title = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @param ?string $value
     */
    public function setAlt(?string $value = null): self
    {
        $this->alt = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setMetadata(?array $value = null): self
    {
        $this->metadata = $value;
        return $this;
    }
}
