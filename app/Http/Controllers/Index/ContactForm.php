<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{
    private $name;
    private $email;
    private $tel;
    private $message;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->tel = $request->tel;
        $this->message = $request->message;
    }

    public function sendEmail()
    {
        $data = array([
            'name' => $this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'message' => $this->message
        ]);

        Mail::to(config('mail.from.address'))->send(new sendMail($data));
    }
}
