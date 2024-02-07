<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function test_a_user_can_create_a_project()
    {
        $user = User::factory()->create();
        $attributes = Project::factory()->raw(['owner_id' => $user->id]);

        $this->actingAs($user)->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);

        $this->get('/projects')->assertSee($attributes['title']);
    }

    public function test_a_project_requires_a_title()
    {
        $attributes = Project::factory()->raw(['title' => '']);

        $this->actingAs(User::factory()->create())->post('projects', $attributes)
            ->assertSessionHasErrors('title');
    }

    public function test_a_project_requires_a_description()
    {
        $attributes = Project::factory()->raw(['description' => '']);

        $this->actingAs(User::factory()->create())->post('projects', $attributes)
            ->assertSessionHasErrors('description');
    }

    public function test_only_authenticated_users_can_create_a_project()
    {
        $attributes = Project::factory()->raw();


        $this->post('projects', $attributes)
            ->assertRedirect('login');
    }


    public function test_a_user_can_view_a_project()
    {
        $project = Project::factory()->create();

        $this->get($project->path())->assertSee($project->title);
    }


}
