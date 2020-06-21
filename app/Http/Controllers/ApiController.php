<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function indexAction()
	{
		return view('index');
	}
	
		public function contaktAction()
	{
		return view('contakt');
	}
	public function onasAction()
	{
		return view('onas');
	}
	public function yslugiAction()
	{
		return view('yslugi');
	}
}
