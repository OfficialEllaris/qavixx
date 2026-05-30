<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::about')
        ->assertStatus(200);
});
