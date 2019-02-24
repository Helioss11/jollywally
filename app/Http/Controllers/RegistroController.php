<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class RegistroController extends Controller{

  public function __construct(){
  }

  public function iniciar(Request $request){

    $data = $request->all();
    return view('dashboard', ['data' => $data]);

  }

}