<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TrainingController extends Controller {

	public function employeeTraining(){
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		return view('pages.employee-training.employee-training', $data);
	}

}
