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
    private string $filename;

    /**
     * @var ?string $folder Optional folder path where the file resides. Special characters will be sanitised.
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var ?int $expiry Optional expiry time for the signature in seconds since epoch. Defaults to 60 minutes from now. Must be a positive integer and in the future.
     */
    #[JsonProperty('expiry')]
    private ?int $expiry;

    /**
     * @var ?value-of<SignaturesCreateRequestMethod> $method Optional HTTP method allowed for the signed URL. Defaults to 'get'.
     */
    #[JsonProperty('method')]
    private ?string $method;

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

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $value
     */
    public function setFilename(string $value): self
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

    /**
     * @return ?int
     */
    public function getExpiry(): ?int
    {
        return $this->expiry;
    }

    /**
     * @param ?int $value
     */
    public function setExpiry(?int $value = null): self
    {
        $this->expiry = $value;
        return $this;
    }

    /**
     * @return ?value-of<SignaturesCreateRequestMethod>
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param ?value-of<SignaturesCreateRequestMethod> $value
     */
    public function setMethod(?string $value = null): self
    {
        $this->method = $value;
        return $this;
    }
}
