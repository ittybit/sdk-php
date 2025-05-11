<?php

namespace Ittybit\Billing\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class GetBillingResponseStore extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $plan
     */
    #[JsonProperty('plan'), ArrayType(['string' => 'mixed'])]
    private ?array $plan;

    /**
     * @var ?array<string, mixed> $usage
     */
    #[JsonProperty('usage'), ArrayType(['string' => 'mixed'])]
    private ?array $usage;

    /**
     * @var ?float $usedPercentage
     */
    #[JsonProperty('used_percentage')]
    private ?float $usedPercentage;

    /**
     * @param array{
     *   plan?: ?array<string, mixed>,
     *   usage?: ?array<string, mixed>,
     *   usedPercentage?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->plan = $values['plan'] ?? null;
        $this->usage = $values['usage'] ?? null;
        $this->usedPercentage = $values['usedPercentage'] ?? null;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getPlan(): ?array
    {
        return $this->plan;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setPlan(?array $value = null): self
    {
        $this->plan = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getUsage(): ?array
    {
        return $this->usage;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setUsage(?array $value = null): self
    {
        $this->usage = $value;
        return $this;
    }

    /**
     * @return ?float
     */
    public function getUsedPercentage(): ?float
    {
        return $this->usedPercentage;
    }

    /**
     * @param ?float $value
     */
    public function setUsedPercentage(?float $value = null): self
    {
        $this->usedPercentage = $value;
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
