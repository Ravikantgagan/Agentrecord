<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsFormValidationController extends Controller
{
   public function jsformvalidation(){

   	return view('admin.jsform');
   }


  public function newreg(){

  	return view('admin.newreg');
  }
}
