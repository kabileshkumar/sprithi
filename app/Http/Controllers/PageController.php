<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'email'   => 'nullable|email|max:150',
            'type'    => 'required|in:Customer,Vendor,SHG,Other',
            'message' => 'required|string|max:2000',
        ]);

        // Replace with Mail::to(...)->send(...) or save to a database table when ready.
        Log::info('Sprithi contact enquiry', $data);

        return back()->with('success', 'Thank you! Our team will call you back shortly.');
    }
}
