<?php

namespace Ittybit\Automations\Requests;

use Ittybit\Core\Json\JsonSerializableType;
use Ittybit\Core\Json\JsonProperty;
use Ittybit\Core\Types\ArrayType;
use Ittybit\Types\WorkflowTaskStep;

class AutomationsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var array<array<string, mixed>> $trigger
     */
    #[JsonProperty('trigger'), ArrayType([['string' => 'mixed']])]
    public array $trigger;

    /**
     * @var ?array<WorkflowTaskStep> $workflow The updated sequence of tasks for the automation.
     */
    #[JsonProperty('workflow'), ArrayType([WorkflowTaskStep::class])]
    public ?array $workflow;

    /**
     * @param array{
     *   name: string,
     *   trigger: array<array<string, mixed>>,
     *   description?: ?string,
     *   workflow?: ?array<WorkflowTaskStep>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->trigger = $values['trigger'];
        $this->workflow = $values['workflow'] ?? null;
    }
}
