<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function submit(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Contact::create($validated);

        return redirect()
            ->back()
            ->withFragment('contact')
            ->with('success', 'Votre message a été envoyé avec succès !');
    }
}
