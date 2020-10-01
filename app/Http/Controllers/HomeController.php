<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOMeta::setTitle('Trusted Mortgage & Remortgage Solutions In UK - SmartMortgages UK');
        SEOMeta::setDescription('Home Page Description: For competitive mortgage and remortgage quotes around the UK at affordable rates, speak to one of our expert credit consultants and get a mortgage. For more visit us today.');

        return view('welcome');
    }

    /**
    *
    * @return view
    */
    public function show()
    {
        SEOMeta::setTitle('Smartmortgagesuk');

        return view('description-all');
    }

    /**
    *
    * @return view
    */
    public function showAbout()
    {
        SEOMeta::setTitle('Smartmortgagesuk');

        return view('about');
    }

    /**
    *
    * @return view
    *
    */
    public function thanks()
    {
        return view('thank-you');
    }
}
