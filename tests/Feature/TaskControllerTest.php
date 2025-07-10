<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test of creating task with valid data
     */
    public function test_can_create_task(): void
    {
        $category = Category::factory()->create();

        $response = $this->postJson('/api/tasks', [
            'title' => 'Testovací úkol',
            'categoryId' => $category->id,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', ['title' => 'Testovací úkol']);
    }
    /**
     * Test of creating task without valid data
     */
    public function test_validation_error_when_creating_task()
    {
        $response = $this->postJson('/api/tasks', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['title', 'categoryId']);
    }


}
