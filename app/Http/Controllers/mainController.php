<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mainController extends Controller
{
    public function index() {
		return view("pages.landing")->with("title","Get on a Top !");
	}
	
	public function privacypolicy() {
		return view("pages.privacypolicy")->with("title","Privacy Policy");
	}
}
