<?php

namespace Proengeno\EdiDescription\Test;

use function Proengeno\EdiDescription\{describe, possibilities, answerCode, acceptedAnswers, deniedAnswers, describeAnswer};

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
    public function it_provides_the_accepted_answers_for_a_specific_answer_code()
    {
        $this->assertIsArray(acceptedAnswers('E_0007'));
    }

    /** @test */
    public function it_throws_an_expection_if_the_accepted_answers_for_a_specific_answer_code_wasnt_found()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertIsArray(acceptedAnswers('UNKNOWN'));
    }

    /** @test */
    public function it_provides_the_denied_answers_for_a_specific_answer_code()
    {
        $this->assertIsArray(deniedAnswers('E_0007'));
    }

    /** @test */
    public function it_throws_an_expection_if_the_denied_answers_for_a_specific_answer_code_wasnt_found()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertIsArray(deniedAnswers('UNKNOWN'));
    }

    /** @test */
    public function it_provides_the_description_for_the_given_answer()
    {
        $this->assertEquals('Fristüberschreitung', describeAnswer('E_0007', 'A01'));
        $this->assertEquals('Zeitreihe akzeptiert', describeAnswer('E_0007', 'A06'));
    }

    /** @test */
    public function it_throws_an_expection_if_the_answer_code_could_not_be_found()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->assertTrue(is_string(answerCode('na', 11115)));
    }
}
