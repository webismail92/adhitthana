<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class ContactController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        $val = $this->validateContact($request->all());
        if ($val->fails()) {
            return redirect('/contact')->withInput()->withErrors($val->errors());
        } else {
            try {
                $data = $request->all();
                Mail::send(['html' => 'mails.contact'], $data, function ($message) use ($data) {
                    $message->to('info@adhitthana.com', 'Adhitthana')->subject('New Enquiry from ' . $data['name'] . " on " . date("d/m/Y"));
                    $message->from('no-reply@adhitthana.com', 'adhitthana.com');
                });
                return redirect('/contact')->with('messageSuccess', 'Thanks for contacting us! We will get back to you soon.');
            } catch (\Exception $ex) {
                return redirect('/contact')->with('messageDanger', 'Error : ' . $ex->getMessage())->withInput();
            }
        }
    }

    private function validateContact(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'contact' => 'required|digits:10',
        ]);
    }
}
