<?php

use Spatie\permission\Models\Role;

test('membuat role baru', function () {
    $this->withoutExceptionHandling();
    $response = $this->post('/role', [
        'name' => 'Admin',
    ]);
    $count = Role::all()->count();
    expect($count)->toBe(1);

    $response->assertRedirect('/role');

});
