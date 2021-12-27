<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller {

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
			$data['news'] = News::all();
			return view('admin.news', $data);
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
			return view('admin.add-news', $data);
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
		$news=array(
			"news_description"=>"News Description",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"news_description"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($news);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$news = new News();
			$news->news_description = $request->input('news_description');
			$news->enabled = $request->input('enabled');
			$news->save();

			Session::flash('success', 'News have been published Successfuly.');
			return redirect('news');
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

	public function enable($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$news = News::find($id);
			$news->enabled = 1;
			$news->save();

			Session::flash('success', 'News enabled Successfuly');
			return redirect('news');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function disable($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$news = News::find($id);
			$news->enabled = 0;
			$news->save();

			Session::flash('success', 'News disabled Successfuly');
			return redirect('news');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function historicalNews(){
		$data['news'] = News::orderby('created_at', 'DESC')->get();
		return view('pages.news.historical-news', $data);
	}

}
