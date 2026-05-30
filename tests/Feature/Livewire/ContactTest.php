<?php

use App\Mail\ContactSubmission;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::contact')
        ->assertStatus(200)
        ->assertSee('Contact our Investigators');
});

it('validates required fields', function () {
    Livewire::test('pages::contact')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'case_type', 'message']);
});

it('sends an email and resets form on successful submission', function () {
    Mail::fake();

    Livewire::test('pages::contact')
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->set('phone', '1234567890')
        ->set('case_type', 'Scam Investigation')
        ->set('message', 'This is a test message that is long enough.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('success', true)
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('message', '');

    Mail::assertSent(ContactSubmission::class, function (ContactSubmission $mail) {
        return $mail->data['name'] === 'John Doe' &&
               $mail->data['email'] === 'john@example.com' &&
               $mail->data['case_type'] === 'Scam Investigation';
    });
});
