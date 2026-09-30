<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contact()
    {
        $contacts = [
            ['label' => 'Email',     'value' => 'email@example.com'],
            ['label' => 'GitHub',    'value' => 'github.com/username'],
            ['label' => 'Instagram', 'value' => '@username'],
        ];

        return view('contact', compact('contacts'));
    }
}
