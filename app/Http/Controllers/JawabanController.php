<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
    	$jawaban =  JawabanModel::get_all();
    	return view('jawaban.index');
    }

    public function create(){
    	return view('jawaban.form');
    }

    public function store(Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$jawaban = JawabanModel::save($data);
    	if($jawaban){
    		return redirect('/jawaban');
    	}
    }  

    public function show($pertanyaan_id){
    	
    }
}
