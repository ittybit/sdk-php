<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;

/**
 * Standard wrapper for single File responses.
 */
class FileResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?File $data
     */
    #[JsonProperty('data')]
    private ?File $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?File,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->links = $values['links'] ?? null;
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return ?File
     */
    public function getData(): ?File
    {
        return $this->data;
    }

    /**
     * @param ?File $value
     */
    public function setData(?File $value = null): self
    {
        $this->data = $value;
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
