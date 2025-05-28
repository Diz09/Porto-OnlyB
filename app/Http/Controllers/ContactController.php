<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() 
    {
        return view('content.contact', 
        [
            'title' => 'Get in',
            'highlight' => 'Touch',
            'background' => 'Contact',
            'description' => 'Silakan hubungi saya melalui kontak berikut atau kirimkan pesan langsung melalui form.',

            'contacts' => [
                [
                    'icon' => 'tf-envelope2',
                    'label' => 'Email',
                    'text' => 'dimas.izzulhaq@gmail.com',
                    'href' => 'mailto:dimas.izzulhaq@gmail.com'
                ],
                [
                    'icon' => 'tf-phone2',
                    'label' => 'Phone',
                    'text' => '+62 812-3456-7890',
                    'href' => 'tel:+6281234567890'
                ],
                [
                    'icon' => 'tf-mobile',
                    'label' => 'Telegram',
                    'text' => '@dimasizzul',
                    'href' => 'https://t.me/dimasizzul'
                ]
            ],

            'socials' => [
                [
                    'icon' => 'tf-ion-social-facebook',
                    'url' => 'https://facebook.com/dimasizzul'
                ],
                [
                    'icon' => 'tf-ion-social-twitter',
                    'url' => 'https://twitter.com/dimasizzul'
                ],
                [
                    'icon' => 'tf-ion-social-google',
                    'url' => 'mailto:dimas.izzulhaq@gmail.com'
                ],
                [
                    'icon' => 'tf-ion-social-github',
                    'url' => 'https://github.com/dimasizzul'
                ]
            ]
        ]);
    }
}
