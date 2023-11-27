<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Livewire\Volt\Volt;
use Tests\TestCase;

class DonationTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    public function test_user_can_donate(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->post('dashboard/donate/submit', [
            'amount' => 100,
        ]);

        //check if donation is created
        $this->assertDatabaseHas('donations', [
            'amount' => 100,
            'user_id' => $user->id,
        ]);

        //check if success message is displayed
        $response->assertSessionHas('success', 'Successfully donated!');

        //check if the user is redirected to the dashboard
        $response->assertRedirect('/dashboard/donate');
    }
}
