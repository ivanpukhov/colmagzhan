<?php

namespace App\Http\Controllers;

use App\Models\Qualifications;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function index()
	{
		$spec = Qualifications::simplePaginate(6);
		return view('welcome', compact('spec'));
	}
}
