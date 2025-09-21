<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public string $name = '';
    public string $email = '';
    public string $question = '';
    public bool $sent = false;

    public function submit(): void
    {
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:3|max:60',
            'question' => 'required|min:3|max:1000',
        ]);

        Mail::raw(
            "Name: {$this->name}\nEmail: {$this->email}\nQuestion: {$this->question}",
            function ($message) {
                $message->to(config('contact.email'))
                    ->subject('New Question');
            }
        );

        $this->reset(['name', 'email', 'question']);
        $this->sent = true;
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
