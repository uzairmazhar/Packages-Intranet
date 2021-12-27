<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Like;
use App\SubKehDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class subKehDoController extends Controller {

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
			$data['messages'] = SubKehDo::whereNull('approved')->get();
			$data['approvedMessages'] = SubKehDo::where('approved', '=', 1)->get();
			$data['declinedMessages'] = SubKehDo::where('approved', '=', 0)->get();
			return view('admin.sub-keh-do', $data);
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$subKehDo=array(
			"full_name"=>"Full Name",
			"email"=>"Email",
			"message"=>"Message",
		);
		$validator=Validator::make($request->all(),
			[
				"full_name"=>"required",
				"email"=>"required",
				"message"=>"required",
			]);
		$validator->setAttributeNames($subKehDo);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{
			$subKehDo = new SubKehDo();
			$subKehDo->name = $request->input('full_name');
			$subKehDo->email = $request->input('email');
			$subKehDo->message = $request->input('message');
			$subKehDo->ip_address = $request->input('ipAddress');
			$subKehDo->save();

			$data['subKehDo'] = $subKehDo;

			Mail::send('emails.subKehDoAdded',$data, function ($message) use ($data) {
				$message->from('systems.services@packages.com.pk', 'Intranet Administrator');
				$message->to($data['subKehDo']->email, $data['subKehDo']->name)->cc('saman.jafri@packages.com.pk', 'Saman Jafri')->cc('nauman.abid@packages.com.pk', 'M Nauman Abid')->subject("Sub Keh Do! Sent for Approval");
			});

//			echo $data['subKehDo'];

			Session::flash('success', 'Your message has been submitted successfuly for approval.');
			return redirect('/');
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

	public function approve($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$message = SubKehDo::find($id);
			$message->approved = 1;
			$message->save();

			Session::flash('success', 'Message Approved Successfuly.');
			return redirect('sub-keh-do');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function decline($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$message = SubKehDo::find($id);
			$message->approved = 0;
			$message->save();

			Session::flash('success', 'Message Declined Successfuly.');
			return redirect('sub-keh-do');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function like(Request $request){
		DB::beginTransaction();
		$like_dislike = Like::where('sub_keh_do_id', '=',$request->message_id)->where('ip_address', '=', $request->ipAddress)->get();
		if(count($like_dislike) == 0){
			$like_dislike = new Like();
			$like_dislike->ip_address = $request->input('ipAddress');
			$like_dislike->sub_keh_do_id = $request->input('message_id');
			$like_dislike->like_dislike = 1;
			$like_dislike->save();
		}
		else{
			if($like_dislike[0]->like_dislike == 0){
				$like_dislike[0]->like_dislike = 1;
				$like_dislike[0]->save();
			}
		}
		$messageLikes = SubKehDo::find($request->input('message_id'));
		DB::commit();
		return json_encode($messageLikes->responseIps);
	}

	public function disLike(Request $request){
		DB::beginTransaction();
		$like_dislike = Like::where('sub_keh_do_id', '=',$request->message_id)->where('ip_address', '=', $request->ipAddress)->get();
		if(count($like_dislike) == 0){
			$like_dislike = new Like();
			$like_dislike->ip_address = $request->input('ipAddress');
			$like_dislike->sub_keh_do_id = $request->input('message_id');
			$like_dislike->like_dislike = 0;
			$like_dislike->save();
		}
		else{
			if($like_dislike[0]->like_dislike == 1){
				$like_dislike[0]->like_dislike = 0;
				$like_dislike[0]->save();
			}
		}
		$messageLikes = SubKehDo::find($request->input('message_id'));
		DB::commit();
		return json_encode($messageLikes->responseIps);
	}

}
