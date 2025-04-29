<?php

namespace Ittybit\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TaskResults extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $passed
     */
    #[JsonProperty('passed'), ArrayType([['string' => 'mixed']])]
    public ?array $passed;

    /**
     * @var ?array<array<string, mixed>> $failed
     */
    #[JsonProperty('failed'), ArrayType([['string' => 'mixed']])]
    public ?array $failed;

    /**
     * @var ?bool $continue
     */
    #[JsonProperty('continue')]
    public ?bool $continue;

    /**
     * @param array{
     *   passed?: ?array<array<string, mixed>>,
     *   failed?: ?array<array<string, mixed>>,
     *   continue?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->passed = $values['passed'] ?? null;
        $this->failed = $values['failed'] ?? null;
        $this->continue = $values['continue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
