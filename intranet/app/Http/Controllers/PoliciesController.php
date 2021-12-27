<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PPP;
use Illuminate\Http\Request;

class PoliciesController extends Controller {

	public function companyPolicy(){
		return view('pages.policies.company-policy');
	}

	public function peopleProcessDocuments(){
		return view('pages.policies.people-process-documents');
	}

	public function peopleProcessForms(){
		return view('pages.policies.people-process-forms');
	}

	public function ppp(){
		$data['ppp'] = PPP::get()->first();
		return view('pages.policies.ppp', $data);
	}

	public function talentFramework(){
		return view('pages.policies.packages-group-talent-framework');
	}

	public function workingWay(){
		return view('pages.policies.packages-group-working-way');
	}
	public function eLearning(){
		return view('pages.policies.packages-group-e-learning');
	}
	public function inrpolicies(){
		return view('pages.policies.inr_policies');
	}
	public function gateapprovalforms(){
		return view('pages.policies.gateapprovalforms');
	}
	public function productdevelopmentforms(){
		return view('pages.policies.productdevelopmentforms');
	}
}
