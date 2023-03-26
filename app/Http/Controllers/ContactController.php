<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Contact\StoreRequest;
use App\Http\Resources\API\ContactResource;
use App\Mail\NewContactSubmitted;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to(config('app.manager_email'))->send(new NewContactSubmitted($contact));

        return new ContactResource($contact);
    }
}
