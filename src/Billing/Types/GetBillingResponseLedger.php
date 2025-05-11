<?php

namespace Ittybit\Billing\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class GetBillingResponseLedger extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $today
     */
    #[JsonProperty('today'), ArrayType(['string' => 'mixed'])]
    private ?array $today;

    /**
     * @var ?array<string, mixed> $month
     */
    #[JsonProperty('month'), ArrayType(['string' => 'mixed'])]
    private ?array $month;

    /**
     * @param array{
     *   today?: ?array<string, mixed>,
     *   month?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->today = $values['today'] ?? null;
        $this->month = $values['month'] ?? null;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getToday(): ?array
    {
        return $this->today;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setToday(?array $value = null): self
    {
        $this->today = $value;
        return $this;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getMonth(): ?array
    {
        return $this->month;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setMonth(?array $value = null): self
    {
        $this->month = $value;
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
