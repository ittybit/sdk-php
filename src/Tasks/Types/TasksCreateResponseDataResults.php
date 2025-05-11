<?php

namespace Ittybit\Tasks\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class TasksCreateResponseDataResults extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $passed
     */
    #[JsonProperty('passed'), ArrayType([['string' => 'mixed']])]
    private ?array $passed;

    /**
     * @var ?array<array<string, mixed>> $failed
     */
    #[JsonProperty('failed'), ArrayType([['string' => 'mixed']])]
    private ?array $failed;

    /**
     * @var ?bool $continue
     */
    #[JsonProperty('continue')]
    private ?bool $continue;

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
     * @return ?array<array<string, mixed>>
     */
    public function getPassed(): ?array
    {
        return $this->passed;
    }

    /**
     * @param ?array<array<string, mixed>> $value
     */
    public function setPassed(?array $value = null): self
    {
        $this->passed = $value;
        return $this;
    }

    /**
     * @return ?array<array<string, mixed>>
     */
    public function getFailed(): ?array
    {
        return $this->failed;
    }

    /**
     * @param ?array<array<string, mixed>> $value
     */
    public function setFailed(?array $value = null): self
    {
        $this->failed = $value;
        return $this;
    }

    /**
     * @return ?bool
     */
    public function getContinue(): ?bool
    {
        return $this->continue;
    }

    /**
     * @param ?bool $value
     */
    public function setContinue(?bool $value = null): self
    {
        $this->continue = $value;
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
