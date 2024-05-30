<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function contact(Request $request)
    {
        // return json_encode($request->phone);
        try {
            $formFields = $request->validate([
                'name' => ['required', 'min:6'],
                'email' => ['required', 'email'],
                'phone' => ['required', 'max:200'],
                'subject' => ['required', 'max:200'],
                'message' => ['required', ' min:10']
            ]);
            $contact = Contact::create($formFields);
            if ($contact) {
                return redirect('/')->with('message', 'Message has been sent...');
            } else {
                return json_encode(array(
                    "statusCode" => 201,
                    "statusMsg" => "Failed"
                ));
            }
        } catch (\Exception $e) {
            return json_encode(array(
                "statusCode" => 400,
                "statusMsg" => $e->getMessage()
            ));
        }
    }
}
