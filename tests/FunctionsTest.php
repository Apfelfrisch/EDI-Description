<?php

namespace Proengeno\EdiDescription\Test;

use function Proengeno\EdiDescription\{describe, possibilities};

class FunctionsTest extends TestCase
{
    /** @test */
    public function it_provides_all_descriptions_for_the_given_key()
    {
        $this->assertTrue(is_array(possibilities('utilmd', 'answer')));
    }

    /** @test */
    public function it_provides_a_specific_description_for_the_given_key()
    {
        $this->assertTrue(is_string(describe('utilmd', 'answer', 'E15')));
    }
}
