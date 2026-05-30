<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('service-card')
        ->assertStatus(200);
});
