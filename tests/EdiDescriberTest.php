<?php

namespace Proengeno\EdiDescription\Test;

use Proengeno\EdiDescription\EdiDescriber;

class EdiDescriberTest extends TestCase
{
    /** @test */
    public function it_provides_all_descriptions_for_the_given_key()
    {
        $result = EdiDescriber::getFor('utilmd', 'answer');
        $this->assertTrue(is_array($result));
    }

    /** @test */
    public function it_provides_a_specific_description_for_the_given_key()
    {
        $result = EdiDescriber::getFor('utilmd', 'answer', 'E15');
        $this->assertTrue(is_string($result));
    }
}
