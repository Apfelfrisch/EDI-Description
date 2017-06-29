<?php

namespace Proengeno\EdiDescription\Test;

use Proengeno\EdiDescription\PathResolver;

class PathResolverTest extends TestCase
{
    /** @test */
    public function it_resolves_the_pathes_for_the_edifact_message_descriptions()
    {
        $this->assertTrue(is_file(PathResolver::getFor('utilmd')));
    }
}
