<?php

namespace Proengeno\EdiDescription\Test;

use function Proengeno\EdiDescription\{describe, possibilities, answerCode};

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

    /** @test */
    public function it_provides_the_answer_codes_over_an_energy_type_and_the_check_id()
    {
        $this->assertTrue(is_string(answerCode('gas', 11115)));
    }

    /** @test */
    public function it_throws_an_expection_if_the_answer_code_could_not_be_found()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->assertTrue(is_string(answerCode('na', 11115)));
    }
}
