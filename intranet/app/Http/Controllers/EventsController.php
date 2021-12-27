<?php namespace App\Http\Controllers;

use App\EventPhotos;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TimeLineEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller {

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
			$data['events'] = TimeLineEvent::all();
			return view('admin.time-line-events', $data);
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
			return view('admin.add-time-line-event', $data);
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
			"event_date"=>"Event Date",
			"event_title"=>"Event Title",
			"event_description"=>"Event Description",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"event_date"=>"required",
				"event_title"=>"required",
				"event_description"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($directory);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$event = new TimeLineEvent();
			$event->event_date = $request->input('event_date');
			$event->event_title = $request->input('event_title');
			$event->description= $request->input('event_description');
			$event->enabled = $request->input('enabled');
			$event->save();
			$images = $request->file('photos');
			global $filename;
			if(count($images) > 0){
				for($i=0; $i<count($images); $i++){
					if($request->file('photos')[$i]){
						$extensions = array(
							'jpg', 'png', 'JPG', 'jpeg', 'JPEG'
						);
						if($request->file('photos')[$i] == NULL)
						{
							$filename = "No File";
						}
						else if ($request->file('photos')[$i]->isValid())
						{
							if($request->file('photos')[$i]->getClientOriginalName()){
								if (in_array($request->file('photos')[$i]->getClientOriginalExtension(), $extensions)) {
									$unique_name = $request->file('photos')[$i]->getClientOriginalName() . time();
									$filename = $unique_name . "." . $request->file('photos')[$i]->getClientOriginalExtension();
									$request->file('photos')[$i]->move('assets/event-photos'.'/'.$event->event_title, $filename);
								}
								else
								{
									Session::flash('error', "File is not valid");
									return Redirect::back()
										->withInput();
								}
							}
						}
					}
					$photo = new EventPhotos();
					$photo->name = $filename;
					$photo->time_line_event_id = $event->id;
					$photo->save();
				}
			}
			$data['path'] = Route::getFacadeRoot()->current()->uri();
			Session::flash('success', 'Event Saved Successfuly');
			return redirect('time-line/events');
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
		$data['event'] = TimeLineEvent::find($id);
		return view('pages.time-line.event-photos', $data);
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
			$data['event'] = TimeLineEvent::find($id);
			return view('admin.update-time-line-event', $data);
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
			"event_date"=>"Event Date",
			"event_title"=>"Event Title",
			"event_description"=>"Event Description",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"event_date"=>"required",
				"event_title"=>"required",
				"event_description"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($directory);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$event = TimeLineEvent::find($id);
			$event->event_date = $request->input('event_date');
			$event->event_title = $request->input('event_title');
			$event->description= $request->input('event_description');
			$event->enabled = $request->input('enabled');
			$event->save();
			$images = $request->file('photos');
			global $filename;
			if(count($images) > 0){
				for($i=0; $i<count($images); $i++){
					if($request->file('photos')[$i]){
						$extensions = array(
							'jpg', 'png', 'JPG', 'jpeg', 'JPEG'
						);
						if($request->file('photos')[$i] == NULL)
						{
							$filename = "No File";
						}
						else if ($request->file('photos')[$i]->isValid())
						{
							if($request->file('photos')[$i]->getClientOriginalName()){
								if (in_array($request->file('photos')[$i]->getClientOriginalExtension(), $extensions)) {
									$unique_name = $request->file('photos')[$i]->getClientOriginalName() . time();
									$filename = $unique_name . "." . $request->file('photos')[$i]->getClientOriginalExtension();
									$request->file('photos')[$i]->move('assets/event-photos'.'/'.$event->event_title, $filename);
								}
								else
								{
									Session::flash('error', "File is not valid");
									return Redirect::back()
										->withInput();
								}
							}
						}
					}
					$photo = new EventPhotos();
					$photo->name = $filename;
					$photo->time_line_event_id = $event->id;
					$photo->save();
				}
			}
			$data['path'] = Route::getFacadeRoot()->current()->uri();
			Session::flash('success', 'Event updated Successfuly');
			return redirect('time-line/events');
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
		//
	}

	public function allTimeLineEvents(){
		$data['path'] = Route::getFacadeRoot()->current()->uri();
		$data['events'] = TimeLineEvent::where('enabled', '=', 1)->orderby('event_date', 'DESC')->get();
		return view('pages.time-line.all-timeline-events', $data);

	}
}
