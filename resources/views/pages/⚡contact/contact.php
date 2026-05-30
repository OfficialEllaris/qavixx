<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Mail\ContactSubmission;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('nullable|string|min:5')]
    public $phone = '';

    #[Validate('required|string')]
    public $case_type = '';

    #[Validate('required|min:10')]
    public $message = '';

    public $success = false;

    public function submit()
    {
        $validated = $this->validate();

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactSubmission($validated));

        $this->reset(['name', 'email', 'phone', 'case_type', 'message']);
        $this->success = true;
    }
};