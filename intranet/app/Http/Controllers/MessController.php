<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MessMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class MessController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Session::get('id');
		if(isset($user_id)){
			$data['path'] = Route::getFacadeRoot()->current()->uri();
			$data['messMenuItem'] = MessMenu::all();
			return view('admin.mess-menu-complete', $data);
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
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
			return view('admin.add-mess-menu', $data);
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
		$totalRows = $request->input('rows');
		for($i=0; $i<$totalRows; $i++){
		    $menu = MessMenu::where('date', '=', $request->input('menu_date')[$i])->first();
		    if(!$menu){
                $menu = new MessMenu();
            }
			$menu->date = $request->input('menu_date')[$i];
			$menu->menu = $request->input('menu')[$i];
			$menu->save();
		}
		Session::flash('success', 'Menu has been saved Successfuly.');
		return redirect('mess/menu/complete');
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
			$data['messMenu'] = MessMenu::find($id);
			return view('admin.update-mess-menu', $data);
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
		$menu = MessMenu::find($id);
		$menu->date = $request->input('menu_date');
		$menu->menu = $request->input('menu');
		$menu->save();

		Session::flash('success', 'Menu has been updated Successfuly.');
		return redirect('mess/menu/complete');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$messMenu = MessMenu::find($id);
		if($messMenu){
		    $messMenu->delete();
        }
        Session::flash('success', 'Menu has been deleted Successfuly.');
        return redirect('mess/menu/complete');
	}

	public function getMenuDateData(Request $request){
		$menu = MessMenu::where('date', '=', $request->input('menu_date'))->get();
		return response(json_encode($menu));
	}

	public function addMenuItem(){
		$view = View::make('admin.partials.add-menu-item')->render();
		$data['row'] = $view;
		return response(json_encode($data), 200);
	}

}
