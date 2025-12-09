<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1) Validation Laravel
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        // 2) Envoi d'email
        Mail::to('info@kenko-web.be')->send(new ContactMessage($validated));

        // 3) Message flash + retour
        return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
    }
}
