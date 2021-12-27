<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Packages extends Controller {

    public function history()
    {
        return view('pages.packages.history');
    }
    public function aboutUs()
    {
        return view('pages.packages.about-us');
    }
    public function companyInformation()
    {
        return view('pages.packages.company-information');
    }
    public function globalPartner()
    {
        return view('pages.packages.global-partner');
    }
    public function policies()
    {
        return view('pages.packages.policies');
    }
/*
    public function elementsAccordions()
    {
        return view('pages.all-policies.elements-accordions');
    }
    */
}
