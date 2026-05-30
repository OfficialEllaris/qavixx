<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::bec-attacks')
        ->assertStatus(200);
});
