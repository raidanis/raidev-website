<?php

use Illuminate\Support\Facades\Route;

// Web Routes for RAIdev Website

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/research', function () {
    return view('research');
})->name('research');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/teaching', function () {
    return view('teaching');
})->name('teaching');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Illuminate\Http\Request $request) {
    // Validate form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|min:10',
        'topic' => 'nullable|string'
    ]);
    
    // TODO: Send email or store to database
    // For now, just return success message
    
    return redirect()->back()->with('success', 'Message sent successfully! I will get back to you soon.');
})->name('contact.store');

// Sitemap
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap', [], 200)
        ->header('Content-Type', 'text/xml');
});
