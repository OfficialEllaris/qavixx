<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::contact')
        ->assertStatus(200);
});
