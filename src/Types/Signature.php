<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;

/**
 * Details of a generated signature and signed URL.
 */
class Signature extends JsonSerializableType
{
    /**
     * @var string $domain Domain of the signed URL
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @var string $filename Filename of the signed file
     */
    #[JsonProperty('filename')]
    public string $filename;

    /**
     * @var ?string $folder Folder of the signed file
     */
    #[JsonProperty('folder')]
    public ?string $folder;

    /**
     * @var int $expiry Expiry timestamp of the signed URL
     */
    #[JsonProperty('expiry')]
    public int $expiry;

    /**
     * @var string $method HTTP method for the signed URL
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var string $signature Generated signature for the signed URL
     */
    #[JsonProperty('signature')]
    public string $signature;

    /**
     * @var string $url Generated signed URL
     */
    #[JsonProperty('url')]
    public string $url;

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
    public function __toString(): string
    {
        return $this->toJson();
    }
}
