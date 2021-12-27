<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Reports extends Controller {

    public function annualReports()
    {
        return view('pages.reports.annual-reports');
    }
    public function quarterlyReports()
    {
        return view('pages.reports.quarterly-reports');
    }

}
