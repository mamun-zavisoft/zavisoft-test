<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\JsonResponse;

class ContactUsController
{
    /**
     * Store a new contact-us submission.
     */
    public function store(ContactUsRequest $request): JsonResponse
    {
        $contact = ContactUs::create($request->validated());

        return response()->json([
            'message' => 'We’ve received your inquiry and will contact you soon.',
            'data' => $contact,
        ], 201);
    }
}
