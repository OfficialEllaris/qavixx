<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages.terms')
        ->assertStatus(200);
});
