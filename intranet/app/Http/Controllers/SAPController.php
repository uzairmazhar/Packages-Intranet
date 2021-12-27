<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SAPController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function loadCategory($category){
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		return view('pages.sap.'.$category, $data);
	}

	public function loadSubPage($parent, $subMenuName){
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		$data['view'] = 'pages.sap.'.$parent.'.'.$subMenuName;
		return view('pages.sap.load', $data);
	}

	public function requestInitiation(){
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		return view('pages.sap.request-initiation', $data);
	}
}
