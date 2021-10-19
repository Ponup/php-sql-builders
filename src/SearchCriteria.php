<?php declare(strict_types=1);

namespace Ponup\SqlBuilders;

class SearchCriteria
{
    private array $clauses = [];
    private array $values = [];

    public function addCriterion(string $clause, array $values = []): void
    {
        $this->clauses[] = $clause;
        $this->values = array_merge($this->values, $values);
    }

    public function hasCriteria(): bool
    {
        return count($this->clauses) > 0;
    }

    public function getCriteria(): array
    {
        return $this->clauses;
    }

    public function getValues(): array
    {
        return $this->values;
    }
}
