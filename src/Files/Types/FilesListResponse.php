<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class FilesListResponse extends JsonSerializableType
{
    /**
     * @var ?FilesListResponseMeta $meta
     */
    #[JsonProperty('meta')]
    private ?FilesListResponseMeta $meta;

    /**
     * @var ?array<FilesListResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([FilesListResponseDataItem::class])]
    private ?array $data;

    /**
     * @var ?FilesListResponseError $error
     */
    #[JsonProperty('error')]
    private ?FilesListResponseError $error;

    /**
     * @var ?FilesListResponseLinks $links
     */
    #[JsonProperty('links')]
    private ?FilesListResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?FilesListResponseMeta,
     *   data?: ?array<FilesListResponseDataItem>,
     *   error?: ?FilesListResponseError,
     *   links?: ?FilesListResponseLinks,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->meta = $values['meta'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->links = $values['links'] ?? null;
    }

    /**
     * @return ?FilesListResponseMeta
     */
    public function getMeta(): ?FilesListResponseMeta
    {
        return $this->meta;
    }

    /**
     * @param ?FilesListResponseMeta $value
     */
    public function setMeta(?FilesListResponseMeta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?array<FilesListResponseDataItem>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param ?array<FilesListResponseDataItem> $value
     */
    public function setData(?array $value = null): self
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return ?FilesListResponseError
     */
    public function getError(): ?FilesListResponseError
    {
        return $this->error;
    }

    /**
     * @param ?FilesListResponseError $value
     */
    public function setError(?FilesListResponseError $value = null): self
    {
        $this->error = $value;
        return $this;
    }

    /**
     * @return ?FilesListResponseLinks
     */
    public function getLinks(): ?FilesListResponseLinks
    {
        return $this->links;
    }

    /**
     * @param ?FilesListResponseLinks $value
     */
    public function setLinks(?FilesListResponseLinks $value = null): self
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
