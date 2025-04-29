<?php

namespace Ittybit\Media\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Types\Media;

class MediaGetResponse extends JsonSerializableType
{
    /**
     * @var ?MediaGetResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public ?MediaGetResponseMeta $meta;

    /**
     * @var ?Media $data
     */
    #[JsonProperty('data')]
    public ?Media $data;

    /**
     * @var ?MediaGetResponseLinks $links
     */
    #[JsonProperty('links')]
    public ?MediaGetResponseLinks $links;

    /**
     * @param array{
     *   meta?: ?MediaGetResponseMeta,
     *   data?: ?Media,
     *   links?: ?MediaGetResponseLinks,
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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
