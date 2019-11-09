<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
	if (Request()->has('section_id')) {
		return DB::table('students')->where('section_id', Request()-> section_id)->get();
	}
		$students = DB::table('students')->get();
		return $students;
	}
	
}
