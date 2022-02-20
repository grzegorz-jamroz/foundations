<?php

declare(strict_types=1);

namespace Ifrost\Foundations;

interface Satisfiable
{
    public function isSatisfied(): bool;
}
