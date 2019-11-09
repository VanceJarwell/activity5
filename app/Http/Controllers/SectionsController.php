<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    //
    public function index()
   {
   	$sections = DB::table('sections')->get();
   	return view ('welcome', compact('sections'));
   }
   
   public function students(){
  	if (Request()->has('section_id')) {
  		return DB::table('students')
  		->leftjoin('payments', 'students.id', '=', 'payments.student_id')
  		->where('section_id', Request()->section_id)->get();
  		}
	}

}
