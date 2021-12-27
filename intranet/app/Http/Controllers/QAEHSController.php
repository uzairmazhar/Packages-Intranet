<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class QAEHSController extends Controller {

	public function qaEhs()
    {
        return view ('pages.qa&ehs.qa&ehs');
    }

    public function iso(){
        return view('pages.qa&ehs.iso');
    }

    public function loadSubPage($subMenuName){
        $data['path'] = Route::getFacadeRoot()->current()->uri();
        $data['view'] = 'pages.qa&ehs.'.$subMenuName;
        return view('pages.sap.load', $data);
    }

    public function fscCOC(){
        return view('pages.qa&ehs.fsc-coc');
    }

 public function greenOffice(){
        return view('pages.qa&ehs.green-office');
    }
	public function ims_documents(){
        return view('pages.qa&ehs.ims-documents');
    }
	public function food_safety_documents(){
        return view('pages.qa&ehs.food-safety-documents');
    }
	
	}
