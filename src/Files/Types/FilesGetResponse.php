<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Types\File;
use Ittybit\Core\Types\Union;

class FilesGetResponse extends JsonSerializableType
{
    /**
     * @var ?FilesGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesGetResponseMeta $meta;

    /**
     * @var (
     *    File
     *   |FilesGetResponseDataAnalysis
     * )|null $data
     */
    #[JsonProperty('data'), Union(File::class, FilesGetResponseDataAnalysis::class, 'null')]
    private File|FilesGetResponseDataAnalysis|null $data;

    /**
     * @var ?FilesGetResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesGetResponseMeta,
     *   data?: (
     *    File
     *   |FilesGetResponseDataAnalysis
     * )|null,
     *   links?: ?FilesGetResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?FilesGetResponseMeta
     */
    public function getMeta(): ?FilesGetResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesGetResponseMeta $value
     */
    public function setMeta(?FilesGetResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return (
     *    File
     *   |FilesGetResponseDataAnalysis
     * )|null
     */
    public function getData(): File|FilesGetResponseDataAnalysis|null
    {
        return $this->data;
    }

    /**
     * @param (
     *    File
     *   |FilesGetResponseDataAnalysis
     * )|null $value
     */
    public function setData(File|FilesGetResponseDataAnalysis|null $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesGetResponseLinks
     */
    public function getLinks(): ?FilesGetResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesGetResponseLinks $value
     */
    public function setLinks(?FilesGetResponseLinks $value = null): self
    {
        $this->links = $value;
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
