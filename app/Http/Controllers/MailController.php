<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class MailController extends Controller
{
    public function sendEnq(Request $request)
    {
        if ($request->ajax()) {
            $val = $this->Validator($request->all());
            if ($val->fails()) {
                return response()->json(['errors', $val->errors()->all()], 400);
            } else {
                try
                {
                    $data = $request->all();
                    Mail::send(['html' => 'mails.contact'], $data, function ($message) use ($data) {
                        $message->to('info@adhitthana.com', 'Adhitthana')->subject('New Enquiry from ' . $data['name'] . " on " . date("d/m/Y"));
                        $message->from('no-reply@adhitthana.com', 'adhitthana.com');
                    });
                    return response()->json(['success', 'THANK YOU !'], 200);
                } catch (\Exception $ex) {
                    return response()->json(['error', $ex->getMessage()], 500);
                }
            }
        } else {
            return response()->json(['error', 'The page you have requested is not accessible !'], 403);
        }
    }

    public function Validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'contact' => 'required|string|min:10|max:15',
        ]);
    }
}
