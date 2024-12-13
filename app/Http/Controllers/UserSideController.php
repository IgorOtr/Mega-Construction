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

    }

    public function renderDevelopmentPage()
    {

    }

    public function renderConstructionsPage()
    {

    }

    public function renderInvestmentPage()
    {

    }

    public function renderPropertiesPage()
    {

    }

    public function renderCareersPage()
    {

    }

    public function renderContactUsPage()
    {
        return view('contact-us');
    }
}
