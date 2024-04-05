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
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'message' => 'required',
    ]);

    try {
        Mail::send('mail', ['data' => $data], function ($message) use ($data) {
            $message->to('care@fiscalfellows.com', 'Fiscal Fellows')
                ->subject('Query')
                ->from($data['email'], $data['name']);
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

})->name('query');



