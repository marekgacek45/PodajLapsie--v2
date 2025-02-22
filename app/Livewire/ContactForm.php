<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $breed;
    public $type;
    public $city;
    public $content;

    public $successMessage;

   

    public $captcha = 0;
 
public function updatedCaptcha($token)
{
    $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
    $this->captcha = $response->json()['score'];
 
    if (!$this->captcha > .3) {
        $this->store();
    } else {
        return session()->flash('success', __('contact.form.captcha'));
    }
 
}


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => ['required', 'regex:/^\+?[0-9]+$/'],
        'content' => 'required',
        'breed' => 'required',
        'city' => 'required',
        'captcha' => ['required'],
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        Mail::send('emails.contact-form-email', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'content' => $this->content,
            'breed' => $this->breed,
            'city' => $this->city,
        ], function ($message) {
            $message->from(env('MAIL_USERNAME'))
                ->to(env('MAIL_TO'))
                ->subject('Nowa wiadomość ze strony podajlapsie.pl');
        });

        $this->successMessage = 'Dziękuję za wiadomość!';

        $this->resetForm();

        session()->flash('success_message',$this->successMessage);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->content = '';
        $this->breed = '';
        $this->type = '';
        $this->city = '';
        $this->captcha = 0;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}