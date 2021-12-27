<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

	public function login(){
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $names = array("username" => "User Name", "password" => "Password",);
        // Validate the inputs
        $validator = Validator::make($request->all(), ["username" => "required", "password" => "required",]);
        $validator->setAttributeNames($names);
        // Return if the validation fails
        if ($validator->fails())
        {
            Session::flash("error", "Please fill in the valid information");
            return Redirect::back()->withErrors($validator) ->withInput();
        } //If Validation passes successfully
        try
        {
            $user = User::where("user_name", "=", $request->input("username"))->where("password", "=", md5($request->input("password")))->get();
            $data['client'] = $user;
            $data['clientIP'] = $request->getClientIp();

            Log::info("User Found");
            if (count($user) == 1)
            {
                Session::put("user_name", $user->first()->user_name);
                Session::put("account_type", $user->first()->rights);
                Session::put("user", "logged in");
                Session::put("id", $user->first()->id);

                return redirect('dashboard');
            }
            else
            {
                Session::flash("error", "Login Details are incorrect");
                return Redirect::back()->withErrors($validator) ->withInput();
            }
        }
        catch (ModelNotFoundException $e)
        {
            Session::flash("error", "Login Details are incorrect");
            return Redirect::back()->withErrors($validator) ->withInput();
        }
    }

    public function logout(){
        Session::forget('id');
        Session::forget('username');
        Session::forget('user');
        Session::forget('account_type');
        Session::flash("success", "Logged out successfully");
        return redirect(URL::to("login"));
    }

}
