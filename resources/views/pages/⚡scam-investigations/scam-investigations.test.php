<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::scam-investigations')
        ->assertStatus(200);
});
