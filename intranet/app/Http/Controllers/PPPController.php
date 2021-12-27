<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PPP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class PPPController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user_id = Session::get('id');
		if(isset($user_id)){
			$data['path'] = Route::getFacadeRoot()->current()->uri();
			return view('admin.add-ppp', $data);
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		global $ppp_training;
		global $ppp_training_manual;
		global $ppp;
		$ppp = PPP::all();

		$ppp_training = $request->file('ppp_training');
		$ppp_training_manual = $request->file('ppp_training_manual');

		if(isset($ppp_training) || isset($ppp_training_manual)){
			$extensions = array(
				'PDF', 'pdf'
			);
			if ($request->file('ppp_training') == NULL) {
				$ppp_training = "No File";
			}
			else if ($request->file('ppp_training')->isValid()) {
				if($request->file('ppp_training')->getClientOriginalName()){
					if (in_array($request->file('ppp_training')->getClientOriginalExtension(), $extensions)) {
						$unique_name = md5($request->file('ppp_training')->getClientOriginalName() . time());
						$ppp_training = $unique_name . "." . $request->file('ppp_training')->getClientOriginalExtension();
						$request->file('ppp_training')->move('assets/policies/human-resources/ppp', $ppp_training);
						if(count($ppp) == 0){
							$ppp = new PPP();
							$ppp->ppp_training = $ppp_training;
							$ppp->save();
						}
						else{
							$ppp = PPP::get()->first();
							$ppp->ppp_training = $ppp_training;
							$ppp->save();
						}
					}
					else {
						Session::flash('error', "File is not valid");
						return Redirect::back()
							->withInput();
					}
				}
			}
			if($request->file('ppp_training_manual') == NULL){
				$ppp_training_manual = "No File";
			}
			else if ($request->file('ppp_training_manual')->isValid()) {
				if($request->file('ppp_training_manual')->getClientOriginalName()){
					if (in_array($request->file('ppp_training_manual')->getClientOriginalExtension(), $extensions)) {
						$unique_name = md5($request->file('ppp_training_manual')->getClientOriginalName() . time());
						$ppp_training_manual = $unique_name . "." . $request->file('ppp_training_manual')->getClientOriginalExtension();
						$request->file('ppp_training_manual')->move('assets/policies/human-resources/ppp', $ppp_training_manual);
						if(count($ppp) == 0){
							$ppp = new PPP();
							$ppp->ppp_training_manual = $ppp_training_manual;
							$ppp->save();
						}
						else{
							$ppp = PPP::get()->first();
							$ppp->ppp_training_manual = $ppp_training_manual;
							$ppp->save();
						}
					}
					else {
						Session::flash('error', "File is not valid");
						return Redirect::back()
							->withInput();
					}
				}
			}
		}

		Session::flash('success', 'PPP Documents have been published Successfuly.');
		return redirect('dashboard');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
