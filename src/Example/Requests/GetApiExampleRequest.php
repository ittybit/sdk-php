<?php

namespace Ittybit\Example\Requests;

use Ittybit\Core\Json\JsonSerializableType;

class GetApiExampleRequest extends JsonSerializableType
{
    /**
     * @var ?string $param
     */
    private ?string $param;

    /**
     * @param array{
     *   param?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->param = $values['param'] ?? null;
    }

    /**
     * @return ?string
     */
    public function getParam(): ?string
    {
        return $this->param;
    }

    /**
     * @param ?string $value
     */
    public function setParam(?string $value = null): self
    {
        $this->param = $value;
        return $this;
    }
}
