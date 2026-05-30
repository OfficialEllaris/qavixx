<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('stat-counter')
        ->assertStatus(200);
});
