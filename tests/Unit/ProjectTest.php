<?php

namespace Tests\Unit;

use App\Models\Project;
use Tests\TestCase;

class ProjectTest extends TestCase
{

    /**
     * A basic unit test example.
     */
    public function test_it_has_path_method(): void
    {
       $project = Project::factory()->make();

       $this->assertEquals('/projects/'. $project->id, $project->path());
    }
}
