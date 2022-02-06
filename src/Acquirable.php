<?php

declare(strict_types=1);

namespace Ifrost\Foundations;

interface Acquirable
{
    public function acquire(): mixed;
}
