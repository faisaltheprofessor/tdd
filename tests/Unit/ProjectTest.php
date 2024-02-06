<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_it_has_path_method(): void
    {
       $project = Project::factory()->make();

       $this->assertEquals('/projects/'. $project->id, $project->path());
    }
}
