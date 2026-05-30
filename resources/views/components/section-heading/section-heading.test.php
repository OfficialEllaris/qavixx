<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('section-heading')
        ->assertStatus(200);
});
