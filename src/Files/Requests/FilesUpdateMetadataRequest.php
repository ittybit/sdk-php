<?php

namespace Ittybit\Files\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class FilesUpdateMetadataRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $metadata An object containing key-value pairs to set or update. Set a key to null to remove it.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?string $filename New filename for the file.
     */
    #[JsonProperty('filename')]
    public ?string $filename;

    /**
     * @var ?string $folder New folder path for the file.
     */
    #[JsonProperty('folder')]
    public ?string $folder;

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
}
