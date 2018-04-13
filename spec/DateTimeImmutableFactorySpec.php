<?php

namespace spec\Epiphany\DateFactory;

use Epiphany\DateFactory\DateTimeImmutableFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DateTimeImmutableFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DateTimeImmutableFactory::class);
    }

    function it_provides_an_immutable_datetime()
    {
	$this->now()->shouldHaveType(\DateTimeImmutable::class);
    }

    function it_provides_a_specific_immutable_datetime()
    {
	$this->now("1981-05-09 09:30:14")->format("Y-m-d H:i:s")->shouldBe("1981-05-09 09:30:14");
    }
}
