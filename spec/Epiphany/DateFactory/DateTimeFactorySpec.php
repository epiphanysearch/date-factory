<?php

namespace spec\Epiphany\DateFactory;

use Epiphany\DateFactory\DateTimeFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DateTimeFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DateTimeFactory::class);
    }
}
