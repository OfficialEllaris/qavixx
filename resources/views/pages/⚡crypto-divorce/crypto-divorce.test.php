<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::crypto-divorce')
        ->assertStatus(200);
});
