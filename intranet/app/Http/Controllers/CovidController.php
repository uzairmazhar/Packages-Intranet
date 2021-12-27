<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CovidController extends Controller {

	public function bulletins()
    {
        return view ('pages.covid19');
    }

    }
