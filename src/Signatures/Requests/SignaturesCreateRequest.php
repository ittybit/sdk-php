<?php

namespace Ittybit\Signatures\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Signatures\Types\SignaturesCreateRequestMethod;

class SignaturesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $filename The name of the file to generate a signature for. Special characters will be sanitised.
     */
    #[JsonProperty('filename')]
    public string $filename;

    /**
     * @var ?string $folder Optional folder path where the file resides. Special characters will be sanitised.
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var ?int $expiry Optional expiry time for the signature in seconds since epoch. Defaults to 60 minutes from now. Must be a positive integer and in the future.
     */
    #[JsonProperty('expiry')]
    public ?int $expiry;

    /**
     * @var ?value-of<SignaturesCreateRequestMethod> $method Optional HTTP method allowed for the signed URL. Defaults to 'get'.
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @param array{
     *   filename: string,
     *   folder?: ?string,
     *   expiry?: ?int,
     *   method?: ?value-of<SignaturesCreateRequestMethod>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->filename = $values['filename'];
        $this->folder = $values['folder'] ?? null;
        $this->expiry = $values['expiry'] ?? null;
        $this->method = $values['method'] ?? null;
    }
}
