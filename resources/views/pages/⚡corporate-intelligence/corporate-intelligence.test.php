<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::corporate-intelligence')
        ->assertStatus(200);
});
