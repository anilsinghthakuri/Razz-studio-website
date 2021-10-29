<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontContactController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contact.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        DB::table('contacts')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return redirect(route('frontend.contact'))->with('message','Form Send Successfully');
    }
}
