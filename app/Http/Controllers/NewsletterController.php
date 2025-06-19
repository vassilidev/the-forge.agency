<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;

class NewsletterController extends Controller
{
    public function submit(NewsletterRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Newsletter::create($validated);

        return redirect()
            ->back()
            ->withFragment('newsletter')
            ->with('newsletter_success', 'Merci pour votre inscription à notre newsletter !');
    }
}
