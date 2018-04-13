<?php

namespace Epiphany\DateFactory;

class DateTimeFactory
{
    public function now(string $now = null):\DateTime
    {
        return new \DateTime($now ?? 'now');
    }
}
