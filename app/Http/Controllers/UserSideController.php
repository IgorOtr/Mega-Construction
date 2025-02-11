<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSideController extends Controller
{
    public function renderComingSoonPage()
    {
        return view('coming-soon');
    }

    public function renderHomePage()
    {
        return view('home');
    }

    public function renderAboutUsPage()
    {
        return view('about-us');
    }

    public function renderDevelopmentPage()
    {
        $properties = DB::table('properties')->orderBy('id','DESC')->get();
        return view('development', compact('properties'));
    }

    public function renderConstructionsPage()
    {
        return view('constructions');
    }

    public function renderInvestmentPage()
    {
        return view('investment');
    }

    public function renderPropertiesPage()
    {
        $properties = DB::table('properties')->orderBy('id','DESC')->get();
        return view('our-properties', compact('properties'));
    }

    public function renderCareersPage()
    {
        return view('careers');
    }

    public function renderContactUsPage()
    {
        return view('contact-us');
    }

    public function renderPrivacyPolicyPage() 
    {
        return view('privacy-policy');
    }

    public function renderCookiesPage() 
    {
        return view('cookies');
    }
}
