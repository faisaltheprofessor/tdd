<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function test_a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();

        $attributes = Project::factory()->raw();


        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);

        $this->get('/projects')->assertSee($attributes['title']);
    }

    public function test_a_project_requires_a_title()
    {
        $attributes = Project::factory()->raw(['title' => '']);

        $this->post('projects', $attributes)
            ->assertSessionHasErrors('title');
    }

    public function test_a_project_requires_a_description()
    {
        $attributes = Project::factory()->raw(['description' => '']);


        $this->post('projects', $attributes)
            ->assertSessionHasErrors('description');
    }

    public function test_a_project_requires_an_owner()
    {
        $attributes = Project::factory()->raw(['owner_id' => null]);


        $this->post('projects', $attributes)
            ->assertSessionHasErrors('owner_id');
    }

    public function test_a_user_can_view_a_project()
    {
        $project = Project::factory()->create();

        $this->get($project->path())->assertSee($project->title);
    }
}
