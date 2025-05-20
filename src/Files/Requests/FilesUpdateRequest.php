<?php

namespace Ittybit\Files\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class FilesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $metadata An object containing key-value pairs to set or update. Set a key to null to remove it.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    private ?array $metadata;

    /**
     * @var ?string $filename New filename for the file.
     */
    #[JsonProperty('filename')]
    private ?string $filename;

    /**
     * @var ?string $folder New folder path for the file.
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @param array{
     *   metadata?: ?array<string, mixed>,
     *   filename?: ?string,
     *   folder?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->metadata = $values['metadata'] ?? null;
        $this->filename = $values['filename'] ?? null;
        $this->folder = $values['folder'] ?? null;
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

    /**
     * @return ?string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param ?string $value
     */
    public function setFilename(?string $value = null): self
    {
        $this->filename = $value;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getFolder(): ?string
    {
        return $this->folder;
    }

    /**
     * @param ?string $value
     */
    public function setFolder(?string $value = null): self
    {
        $this->folder = $value;
        return $this;
    }
}
