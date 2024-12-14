<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('development');
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

    }

    public function renderCareersPage()
    {
        return view('careers');
    }

    public function renderContactUsPage()
    {
        return view('contact-us');
    }
}
