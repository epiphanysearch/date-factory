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

    function it_provides_a_datetime()
    {
	$this->now()->shouldHaveType(\DateTime::class);
    }

    function it_provides_a_specific_datetime()
    {
	$this->now("1981-05-09 09:30:14")->format("Y-m-d H:i:s")->shouldBe("1981-05-09 09:30:14");
    }
}
