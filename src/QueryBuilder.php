<?php declare(strict_types=1);

namespace Ponup\SqlBuilders;

interface QueryBuilder
{
    public function toSql(): string;
}
