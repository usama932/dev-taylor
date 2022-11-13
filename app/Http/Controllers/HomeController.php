<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Meta;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # Section description
        // Meta::set('title', 'You are at home');
        // Meta::set('description', 'This is my home. Enjoy!');
        // Meta::set('image', asset('images/home-logo.png'));

        return view('index');
    }

    public function detail()
    {
        # Section description
        Meta::set('title', 'This is a detail page');
        Meta::set('description', 'All about this detail page');

        # Remove previous images
        Meta::remove('image');

        # Add only this last image
        Meta::set('image', asset('images/detail-logo.png'));

        # Canonical URL
        Meta::set('canonical', 'http://example.com');

        return view('detail');
    }

    public function private()
    {
        # Section description
        Meta::set('title', 'Private Area');
        Meta::set('description', 'You shall not pass!');
        Meta::set('image', asset('images/locked-logo.png'));

        # Custom robots for this section
        Meta::set('robots', 'noindex,nofollow');

        return view('private');
    }

}
