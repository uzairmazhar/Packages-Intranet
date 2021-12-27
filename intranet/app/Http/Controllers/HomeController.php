<?php namespace App\Http\Controllers;

use App\Birthday;
use App\EmployeeAnnouncement;
use App\News;
use App\MessMenu;
use App\SubKehDo;
use App\TimeLineEvent;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {

	public function index()
	{

		$data['messages'] = SubKehDo::where('approved', '=', 1)->orderby('created_at', 'DESC')->get();
		$data['news'] = News::where('enabled', '=', 1)->orderby('updated_at', 'DESC')->get();
		$data['messMenu'] = MessMenu::where('date', '=', date('Y-m-d'))->first();
		$data['announcements'] = EmployeeAnnouncement::where('enabled', '=', 1)->orderby('created_at', 'DESC')->get();
		$data['events'] = TimeLineEvent::where('enabled', '=', 1)->orderby('event_date', 'DESC')->limit(2)->get();
		$data['birthdays'] = Birthday::where('date_of_birth', '=', date('Y-m-d'))->get();
//		print_r(Cookie::get());
		return view('pages.home', $data);
	}

	public function loggedOut($message)
	{
		$data['messages'] = SubKehDo::where('approved', '=', 1)->orderby('created_at', 'DESC')->get();
		$data['news'] = News::where('enabled', '=', 1)->orderby('updated_at', 'DESC')->get();
		$data['announcements'] = EmployeeAnnouncement::where('enabled', '=', 1)->orderby('created_at', 'DESC')->get();
		$data['events'] = TimeLineEvent::where('enabled', '=', 1)->orderby('event_date', 'DESC')->limit(2)->get();
		$data['birthdays'] = Birthday::where('date_of_birth', '=', date('Y-m-d'))->get();
		$data['messMenu'] = MessMenu::where('date', '=', date('Y-m-d'))->first();

//		print_r(Cookie::get());
		if($message == 'logged-out'){
			Session::flash('success', 'Logged Out Successfuly');
			return view('pages.home', $data);
		}
		elseif($message == 'incorrect-details'){
			Session::flash('error', 'Login details are incorrect.');
			return view('pages.home', $data);
		}
		else{
			Session::flash('success', 'You will receive a password reset link shortly if you are a valid user');
			return view('pages.home', $data);
		}

	}
	public function timelineSeeMore()
	{
		return view('pages.timeline-see-more');
	}
	public function Event()
	{
		return view('pages.event');
	}
	public function pivVideo()
	{
		return view('pages.pic-video');
	}

}
