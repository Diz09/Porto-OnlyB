<?php

namespace App\Http\Controllers;

use App\Mail\SimpleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show() 
    {
        $email = "e41221754@student.polije.ac.id";
        $fb = "https://www.facebook.com/share/16Bgak63ea/";
        $telegram = "https://t.me/dimasizzul";
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

            'contacts' => [
                [
                    'icon' => 'tf-envelope2',
                    'label' => 'Email',
                    'text' => $email,
                    'href' => 'mailto:' . $email
                ],
                [
                    'icon' => 'tf-phone2',
                    'label' => 'Phone',
                    'text' => '+62 853-3511-4721',
                    'href' => 'tel:+6285335114721'
                ],
                [
                    'icon' => 'tf-mobile',
                    'label' => 'Telegram',
                    'text' => '@dimasizzul',
                    'href' => $telegram
                ]
            ],

            'socials' => [
                [
                    'icon' => 'tf-ion-social-facebook',
                    'url' => $fb
                ],
                [
                    'icon' => 'tf-ion-social-google',
                    'url' => 'mailto:' . $email
                ],
                [
                    'icon' => 'tf-ion-social-github',
                    'url' => 'https://github.com/Diz09'
                ]
            ],
        ]);
    }
}
