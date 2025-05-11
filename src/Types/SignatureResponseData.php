<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

class SignatureResponseData extends JsonSerializableType
{
    /**
     * @var string $domain Domain of the signed URL
     */
    #[JsonProperty('domain')]
    private string $domain;

    /**
     * @var string $filename Filename of the signed file
     */
    #[JsonProperty('filename')]
    private string $filename;

    /**
     * @var ?string $folder Folder of the signed file
     */
    #[JsonProperty('folder')]
    private ?string $folder;

    /**
     * @var int $expiry Expiry timestamp of the signed URL
     */
    #[JsonProperty('expiry')]
    private int $expiry;

    /**
     * @var string $method HTTP method for the signed URL
     */
    #[JsonProperty('method')]
    private string $method;

    /**
     * @var string $signature Generated signature for the signed URL
     */
    #[JsonProperty('signature')]
    private string $signature;

    /**
     * @var string $url Generated signed URL
     */
    #[JsonProperty('url')]
    private string $url;

    /**
     * @param array{
     *   domain: string,
     *   filename: string,
     *   expiry: int,
     *   method: string,
     *   signature: string,
     *   url: string,
     *   folder?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
        $this->filename = $values['filename'];
        $this->folder = $values['folder'] ?? null;
        $this->expiry = $values['expiry'];
        $this->method = $values['method'];
        $this->signature = $values['signature'];
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $value
     */
    public function setDomain(string $value): self
    {
        $this->domain = $value;
        return $this;
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
     * @return int
     */
    public function getExpiry(): int
    {
        return $this->expiry;
    }

    /**
     * @param int $value
     */
    public function setExpiry(int $value): self
    {
        $this->expiry = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $value
     */
    public function setMethod(string $value): self
    {
        $this->method = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $value
     */
    public function setSignature(string $value): self
    {
        $this->signature = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $value
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;
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
