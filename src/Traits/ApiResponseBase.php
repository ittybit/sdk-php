<?php

namespace Ittybit\Traits;

use Ittybit\Types\Meta;
use Ittybit\Types\Links;
use Ittybit\Core\Json\JsonProperty;

/**
 * Base structure for standard API responses.
 *
 * @property ?Meta $meta
 * @property ?Links $links
 */
trait ApiResponseBase
{
    /**
     * @var ?Meta $meta
     */
    #[JsonProperty('meta')]
    private ?Meta $meta;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    private ?Links $links;

    /**
     * @return ?Meta
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * @param ?Meta $value
     */
    public function setMeta(?Meta $value = null): self
    {
        $this->meta = $value;
        return $this;
    }

    /**
     * @return ?Links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * @param ?Links $value
     */
    public function setLinks(?Links $value = null): self
    {
        $this->links = $value;
        return $this;
    }
}
