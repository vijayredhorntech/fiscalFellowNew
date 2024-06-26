<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/mutual_funds', function () {
    return view('mutualFunds');
})->name('mutualFunds');
Route::get('/loans', function () {
    return view('loans');
})->name('loans');

Route::get('/digital_signature', function () {
    return view('digitalSignature');
})->name('digitalSignature');

Route::get('/business_support', function () {
    return view('businessSupport');
})->name('businessSupport');

Route::get('/dsa', function () {
    return view('dsa');
})->name('dsa');



Route::post('/query', function (Request $request) {
    if ($request->input('g-recaptcha-response')==null){
        return redirect()->back()->with('error', 'Please select the captcha');
    }
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ]);

    try {
        Mail::send('mail', ['data' => $data], function ($message) use ($data) {
            $message->to('webform@fiscalfellows.com', 'Fiscal Fellows')
                ->subject('Query')
                ->from('webform@fiscalfellows.com', 'BUSINESS ENQUIRY');
        });
    }
    catch (\Exception $e) {
        session()->flash('success', 'Your query has been submitted successfully!');
        return redirect()->back();
    }
    session()->flash('success', 'Your query has been submitted successfully!');
    return redirect()->back();
})->name('query');



Route::post('/dscQuery', function (Request $request) {
    if ($request->input('g-recaptcha-response')==null){
        return redirect()->back()->with('error', 'Please select the captcha');
    }

    $data = $request->validate([
        'name' => 'required',
        'dcsType' => 'required',
        'number' => 'required',
    ]);

    try {
        Mail::send('dscMail', ['data' => $data], function ($message) use ($data) {
            $message->to('vcdiamond507@gmail.com', 'Fiscal Fellows')
                ->subject('Query')
                ->from('webform@fiscalfellows.com', 'DSC ENQUIRY');
        });
    }
    catch (\Exception $e) {

        session()->flash('success', 'Your query has been submitted successfully!');


        return redirect()->back();
    }



    // save success message in session

    session()->flash('success', 'Your query has been submitted successfully!');

    return redirect()->back();

    // You may add any further logic you need here, such as redirecting the user to a thank you page.

})->name('dscQuery');



