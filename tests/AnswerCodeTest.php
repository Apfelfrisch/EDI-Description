<?php

namespace Proengeno\EdiDescription\Test;

use Proengeno\EdiDescription\EdiDescriber;

class AnswerCodeTest extends TestCase
{
    /** @test */
    public function it_provides_the_answer_codes_over_an_energy_type_and_the_check_id()
    {
        $result = EdiDescriber::getPossibilitiesFor('utilmd', 'answer');
        $this->assertTrue(is_array($result));
    }
}
