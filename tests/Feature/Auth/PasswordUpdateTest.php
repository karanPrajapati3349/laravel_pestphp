<?php

namespace Tests\Feature\Auth;

// use App\Models\User;
// use Illuminate\Support\Facades\Hash;
// use Tests\TestCase;


// it("test_password_can_be_updated", function () {
//     $user = User::factory()->create();

//     $response = $this
//         ->actingAs($user)
//         ->from('/profile')
//         ->put('/password', [
//                 'current_password' => 'password',
//                 'password' => 'new-password',
//                 'password_confirmation' => 'new-password',
//             ]);

//     $response
//         ->assertSessionHasNoErrors()
//         ->assertRedirect('/profile');

//     $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
// });

// it("test_correct_password_must_be_provided_to_update_password", function () {
//     $user = User::factory()->create();

//     $response = $this
//         ->actingAs($user)
//         ->from('/profile')
//         ->put('/password', [
//             'current_password' => 'wrong-password',
//             'password' => 'new-password',
//             'password_confirmation' => 'new-password',
//         ]);

//     $response
//         ->assertSessionHasErrors('current_password')
//         ->assertRedirect('/profile');
// });