<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contact()
    {
        $contacts = [
            ['label' => 'Email',     'value' => 'vinandosyahputra@gmail.com'],
            ['label' => 'GitHub',    'value' => 'Vynnzie'],
            ['label' => 'Instagram', 'value' => '@v_capuccino'],
        ];

        return view('contact', compact('contacts'));
    }
}
