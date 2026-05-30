<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::social-media')
        ->assertStatus(200);
});
