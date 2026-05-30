<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::identify-anonymous')
        ->assertStatus(200);
});
