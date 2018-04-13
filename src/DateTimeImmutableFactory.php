<?php

namespace Epiphany\DateFactory;

class DateTimeImmutableFactory
{
    public function now(string $now = null):\DateTimeImmutable
    {
        return new \DateTimeImmutable($now ?? 'now');
    }
}
