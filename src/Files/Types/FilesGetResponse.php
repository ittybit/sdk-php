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
    public ?FilesGetResponseMeta $meta;

    /**
     * @var (
     *    File
     *   |FilesGetResponseDataAnalysis
     * )|null $data
     */
    #[JsonProperty('data'), Union(File::class, FilesGetResponseDataAnalysis::class, 'null')]
    public File|FilesGetResponseDataAnalysis|null $data;

    /**
     * @var ?FilesGetResponseLinks $links
     */
    #[JsonProperty('links')]
    public ?FilesGetResponseLinks $links;

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
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
