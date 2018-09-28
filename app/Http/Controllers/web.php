<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class web extends Controller
{
	function index(){
		return view('index');
	}
	
	function tambah(){
		echo 'controller contoh fx tambah';
	}
}
