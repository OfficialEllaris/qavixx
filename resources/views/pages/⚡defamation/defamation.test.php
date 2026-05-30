<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::defamation')
        ->assertStatus(200);
});
