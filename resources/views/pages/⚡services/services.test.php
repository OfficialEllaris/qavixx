<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::services')
        ->assertStatus(200);
});
