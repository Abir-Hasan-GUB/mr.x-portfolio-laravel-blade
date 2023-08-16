<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        return view('pages.contact');
    }

    function postAContact(Request $request){
        $formData = $request->input();

        $affected = DB::table('contacts')
            ->insert($formData);

        return response()->json(['msg' => 'Form submited successfully!'], 200);
    }

    function getAllContacts(Request $request){
        $allContacts = DB::table('contacts')->get();
        return $allContacts;
    }
}
