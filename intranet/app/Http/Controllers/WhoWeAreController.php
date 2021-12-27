<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WhoWeAreController extends Controller {

	public function companyProfile(){
		return view('pages.who-we-are.company-profile');
	}

	public function overTheYears(){
		return view('pages.who-we-are.over-the-years');
	}

	public function ourCoreValues(){
		return view('pages.who-we-are.our-core-values');
	}

	public function legalInformation(){
		return view('pages.who-we-are.legal-information');
	}

	public function legacyOfLove(){
		return view('pages.who-we-are.legacy-of-love');
	}
}
