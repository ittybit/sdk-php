<?php

namespace Ittybit\Billing\Types;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;

class GetBillingResponse extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $org
     */
    #[JsonProperty('org'), ArrayType(['string' => 'mixed'])]
    private ?array $org;

    /**
     * @var ?GetBillingResponseStore $store
     */
    #[JsonProperty('store')]
    private ?GetBillingResponseStore $store;

    /**
     * @var ?GetBillingResponseLedger $ledger
     */
    #[JsonProperty('ledger')]
    private ?GetBillingResponseLedger $ledger;

    /**
     * @param array{
     *   org?: ?array<string, mixed>,
     *   store?: ?GetBillingResponseStore,
     *   ledger?: ?GetBillingResponseLedger,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->org = $values['org'] ?? null;
        $this->store = $values['store'] ?? null;
        $this->ledger = $values['ledger'] ?? null;
    }

    /**
     * @return ?array<string, mixed>
     */
    public function getOrg(): ?array
    {
        return $this->org;
    }

    /**
     * @param ?array<string, mixed> $value
     */
    public function setOrg(?array $value = null): self
    {
        $this->org = $value;
        return $this;
    }

    /**
     * @return ?GetBillingResponseStore
     */
    public function getStore(): ?GetBillingResponseStore
    {
        return $this->store;
    }

    /**
     * @param ?GetBillingResponseStore $value
     */
    public function setStore(?GetBillingResponseStore $value = null): self
    {
        $this->store = $value;
        return $this;
    }

    /**
     * @return ?GetBillingResponseLedger
     */
    public function getLedger(): ?GetBillingResponseLedger
    {
        return $this->ledger;
    }

    /**
     * @param ?GetBillingResponseLedger $value
     */
    public function setLedger(?GetBillingResponseLedger $value = null): self
    {
        $this->ledger = $value;
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
