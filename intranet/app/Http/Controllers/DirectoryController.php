<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TelephoneDirectory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DirectoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		if($request->getRequestUri() == '/complete-directory'){
			$user_id = Session::get('id');
			if(isset($user_id)){
				$data['employees'] = TelephoneDirectory::all();
				return view('admin.complete-directory', $data);
			}
			else{
				Session::flash('error','Your Session has ended.');
				return redirect('login');
			}

		}
		elseif($request->getRequestUri() == '/intranet_packages/telephone-directory'){
			$data['employees'] = TelephoneDirectory::where('enabled', '=', 1)->get();
			return view('pages.telephone-directory.telephone-directory', $data);
		}
		else{
			Session::flash('error', 'Not Authorized');
			return Redirect::back();
		}
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
			return view('admin.add-directory', $data);
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
		$directory=array(
			"name"=>"Full Name",
			"designation"=>"Designation",
			"department"=>"Department",
			"direct_line"=>"Direct Line",
			"extension"=>"Extension",
			"mobile_number"=>"Mobile Number",
			"email"=>"Email",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"name"=>"required",
				"designation"=>"required",
				"department"=>"required",
				"direct_line"=>"required",
				"extension"=>"required",
				"mobile_number"=>"required",
				"email"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($directory);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$directory = new TelephoneDirectory();
			$directory->name = $request->input('name');
			$directory->designation = $request->input('designation');
			$directory->department= $request->input('designation');
			$directory->direct_line = $request->input('direct_line');
			$directory->extension= $request->input('extension');
			$directory->mobile_number = $request->input('mobile_number');
			$directory->email = $request->input('email');
			$directory->enabled = $request->input('enabled');
			$directory->save();

			Session::flash('success', 'Directory Added Successfuly');
			return redirect('complete-directory');
		}
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
		$user_id = Session::get('id');
		if(isset($user_id)){
			$data['path'] = Route::getFacadeRoot()->current()->uri();
			$data['directory'] = TelephoneDirectory::find($id);
			return view('admin.update-directory', $data);
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$directory=array(
			"name"=>"Full Name",
			"designation"=>"Designation",
			"department"=>"Department",
			"direct_line"=>"Direct Line",
			"extension"=>"Extension",
			"mobile_number"=>"Mobile Number",
			"email"=>"Email",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"name"=>"required",
				"designation"=>"required",
				"department"=>"required",
				"direct_line"=>"required",
				"extension"=>"required",
				"mobile_number"=>"required",
				"email"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($directory);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$directory = TelephoneDirectory::find($id);
			$directory->name = $request->input('name');
			$directory->designation = $request->input('designation');
			$directory->department= $request->input('designation');
			$directory->direct_line = $request->input('direct_line');
			$directory->extension= $request->input('extension');
			$directory->mobile_number = $request->input('mobile_number');
			$directory->email = $request->input('email');
			$directory->enabled = $request->input('enabled');
			$directory->save();

			Session::flash('success', 'Directory Updated Successfuly');
			return redirect('complete-directory');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user_id = Session::get('id');
		if(isset($user_id)){
			$directory = TelephoneDirectory::find($id);
			$directory->delete();

			Session::flash('success', 'Directory Deleted Successfuly');
			return redirect('complete-directory');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function enable($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$directory = TelephoneDirectory::find($id);
			$directory->enabled = 1;
			$directory->save();
			Session::flash('success', 'Directory enabled Successfuly');
			return redirect('complete-directory');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}
	}

	public function disable($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$directory = TelephoneDirectory::find($id);
			$directory->enabled = 0;
			$directory->save();
			Session::flash('success', 'Directory disabled Successfuly');
			return redirect('complete-directory');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}
	}
}
