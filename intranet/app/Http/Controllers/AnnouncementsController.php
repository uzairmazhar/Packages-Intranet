<?php namespace App\Http\Controllers;

use App\EmployeeAnnouncement;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AnnouncementsController extends Controller {

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
			$data['announcements'] = EmployeeAnnouncement::all();
			return view('admin.employee-announcements', $data);
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
			return view('admin.add-announcement', $data);
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
			"title"=>"Title",
			"description"=>"Description",
			"title_attachment"=>"Title Attachment",
			"attachment_1"=>"Attachment 1",
			"attachment_2"=>"Attachment 2",
			"enabled"=>"Enabled",
		);
		$validator=Validator::make($request->all(),
			[
				"title"=>"required",
				"description"=>"required",
				"title_attachment"=>"required",
				"enabled"=>"required",
			]);
		$validator->setAttributeNames($news);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else{

			global $title_attachment;
			global $attachment_1;
			global $attachment_2;

			$title_attachment = $request->file('title_attachment');
			$attachment_1 = $request->file('attachment_1');
			$attachment_2 = $request->file('attachment_2');

			if(isset($title_attachment)){
				$extensions = array(
					'jpg', 'png', 'JPG', 'PNG', 'PDF', 'pdf', 'ZIP', 'zip', 'RAR', 'rar', 'docx', 'DOCX', 'PPTX', 'pptx', 'MP4', 'mp4','xls',
					'xlsx', 'vcf', 'cpp', 'h', 'exe', 'txt', 'ino', 'wdf', 'dwg', 'xlsb', 'bin', 'jpeg', 'JPEG'
				);
				if ($request->file('title_attachment') == NULL)
				{
					$title_attachment = "No File";
				}
				else if ($request->file('title_attachment')->isValid())
				{
					if($request->file('title_attachment')->getClientOriginalName()){
						if (in_array($request->file('title_attachment')->getClientOriginalExtension(), $extensions)) {
							$unique_name = md5($request->file('title_attachment')->getClientOriginalName() . time());
							$title_attachment = $unique_name . "." . $request->file('title_attachment')->getClientOriginalExtension();
							$request->file('title_attachment')->move('assets/employee-announcements', $title_attachment);
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
			if(isset($attachment_1)){
				$extensions = array(
					'jpg', 'png', 'JPG', 'PNG', 'PDF', 'pdf', 'ZIP', 'zip', 'RAR', 'rar', 'docx', 'DOCX', 'PPTX', 'pptx', 'MP4', 'mp4','xls',
					'xlsx', 'vcf', 'cpp', 'h', 'exe', 'txt', 'ino', 'wdf', 'dwg', 'xlsb', 'bin', 'jpeg', 'JPEG'
				);
				if ($request->file('attachment_1') == NULL)
				{
					$attachment_1 = "No File";
				}
				else if ($request->file('attachment_1')->isValid())
				{
					if($request->file('attachment_1')->getClientOriginalName()){
						if (in_array($request->file('attachment_1')->getClientOriginalExtension(), $extensions)) {
							$unique_name = md5($request->file('attachment_1')->getClientOriginalName() . time());
							$attachment_1 = $unique_name . "." . $request->file('attachment_1')->getClientOriginalExtension();
							$request->file('attachment_1')->move('assets/employee-announcements', $attachment_1);
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
			if(isset($attachment_2)){
				$extensions = array(
					'jpg', 'png', 'JPG', 'PNG', 'PDF', 'pdf', 'ZIP', 'zip', 'RAR', 'rar', 'docx', 'DOCX', 'PPTX', 'pptx', 'MP4', 'mp4','xls',
					'xlsx', 'vcf', 'cpp', 'h', 'exe', 'txt', 'ino', 'wdf', 'dwg', 'xlsb', 'bin', 'jpeg', 'JPEG'
				);
				if ($request->file('attachment_2') == NULL)
				{
					$attachment_2 = "No File";
				}
				else if ($request->file('attachment_2')->isValid())
				{
					if($request->file('attachment_2')->getClientOriginalName()){
						if (in_array($request->file('attachment_2')->getClientOriginalExtension(), $extensions)) {
							$unique_name = md5($request->file('attachment_2')->getClientOriginalName() . time());
							$attachment_2 = $unique_name . "." . $request->file('attachment_2')->getClientOriginalExtension();
							$request->file('attachment_2')->move('assets/employee-announcements', $attachment_2);
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

			$announcement = new EmployeeAnnouncement();
			$announcement->title = $request->input('title');
			$announcement->description = $request->input('description');
			$announcement->category = $request->input('category');
			$announcement->title_attachment = $title_attachment;
			$announcement->attachment_1 = $attachment_1;
			$announcement->attachment_2 = $attachment_2;
			$announcement->enabled = $request->input('enabled');
			$announcement->save();

			Session::flash('success', 'Announcement have been published Successfuly.');
			return redirect('employee-announcements');
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
			$employeeAnnouncement = EmployeeAnnouncement::find($id);
			$employeeAnnouncement->enabled = 1;
			$employeeAnnouncement->save();

			Session::flash('success', 'Announcement Enabled Successfuly');
			return redirect('employee-announcements');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}

	}

	public function disable($id){
		$user_id = Session::get('id');
		if(isset($user_id)){
			$employeeAnnouncement = EmployeeAnnouncement::find($id);
			$employeeAnnouncement->enabled = 0;
			$employeeAnnouncement->save();

			Session::flash('success', 'Announcement Enabled Successfuly');
			return redirect('employee-announcements');
		}
		else{
			Session::flash('error','Your Session has ended.');
			return redirect('login');
		}
	}
}
