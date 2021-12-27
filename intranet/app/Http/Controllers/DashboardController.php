<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SubKehDo;
use App\User;
use App\UserCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller {

	public function index(){
        $user_id = Session::get('id');
        if(isset($user_id)){
            $data['path'] = Route::getFacadeRoot()->current()->uri();
            $data['user'] = User::find($user_id);
            $data['uniqueVisitors'] = UserCount::distinct('ip_address')->count();
            $data['hits'] = UserCount::sum('hits');
            $data['upApprovedSubKehDo'] = SubKehDo::whereNull('approved')->count();
            return view('admin.dashboard', $data);
        }
        else{
            Session::flash('error','Your Session has ended.');
            return redirect('login');
        }
    }

    public function trends(){
        $user_id = Session::get('id');
        if(isset($user_id)){
            $data['path'] = Route::getFacadeRoot()->current()->uri();
            $data['user'] = User::find($user_id);
            return view('admin.trends-date', $data);
        }
        else{
            Session::flash('error','Your Session has ended.');
            return redirect('login');
        }
    }

    public function generateTrends(Request $request){
        $data['path'] = Route::getFacadeRoot()->current()->uri();
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');

        $data['trends'] = DB::table('user_counts')
            ->selectRaw('sum(hits) as hits, count(ip_address) as unique_hits, date(created_at) as date')
            ->whereRaw('date(created_at) >= "'.$from_date.'"')
            ->whereRaw('date(created_at) <= "'.$to_date.'"')
            ->groupby('date')
            ->get();

        return view('admin.trends', $data);
    }

    public function countUniqueUser($ip){
        $userCount = UserCount::where('ip_address', '=', $ip)->whereDate('created_at', '=', date('Y-m-d'))->get();
        if(count($userCount) == 1){
            $userCount[0]->hits = $userCount[0]->hits+1;
            $userCount[0]->save();
            return response(json_encode('Return User'),200);
        }
        else{
            $userCount = new UserCount();
            $userCount->ip_address = $ip;
            $userCount->hits = 1;
            $userCount->save();
            return response(json_encode('New User'),200);
        }
    }


    public function getClientInformation(Request $request){

        $system = system('ifconfig');
        echo $system;
        /*$ch = curl_init('ipconfig');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result);
        echo $result;*/

    }

}
