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
    public ?Meta $meta;

    /**
     * @var ?Links $links
     */
    #[JsonProperty('links')]
    public ?Links $links;
}
