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

  public function investment(){

    return view('investment');

  }

  public function movements(){

    return view('movements');

  }

  public function transfers(){

    return view('transfers');

  }

}