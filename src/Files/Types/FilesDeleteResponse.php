<?php

namespace Ittybit\Files\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Traits\ApiResponseBase;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Types\Meta;
use Ittybit\Types\Links;

class FilesDeleteResponse extends JsonSerializableType
{
    use ApiResponseBase;

    /**
     * @var ?FilesDeleteResponseData $data Contains a confirmation message
     */
    #[JsonProperty('data')]
    private ?FilesDeleteResponseData $data;

    /**
     * @param array{
     *   meta?: ?Meta,
     *   links?: ?Links,
     *   data?: ?FilesDeleteResponseData,
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
     * @return ?FilesDeleteResponseData
     */
    public function getData(): ?FilesDeleteResponseData
    {
        return $this->data;
    }

    /**
     * @param ?FilesDeleteResponseData $value
     */
    public function setData(?FilesDeleteResponseData $value = null): self
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
