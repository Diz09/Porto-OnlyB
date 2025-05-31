<?php

namespace App\Http\Controllers;

use App\Mail\SimpleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use App\Models\Social;

class ContactController extends Controller
{
    public function show() 
    {
        $email = "e41221754@student.polije.ac.id";
        $waNumber = '6285335114721';
        $waLink = "https://wa.me/{$waNumber}";
        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?data={$waLink}&size=200x200";

        return view('content.contact', 
        [
            'title' => 'Get in',
            'highlight' => 'Touch',
            'background' => 'Contact',
            'description' => 'Please contact me via the following contact or send a direct message via the form.',
            'qrCodeUrl' => $qrCodeUrl,
            'waLink' => $waLink,
            'contacts' => Contact::all(),
            'socials' => Social::all(),
        ]);
    }
}
