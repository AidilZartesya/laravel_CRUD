<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
    	$jawaban =  JawabanModel::get_all();
    	return view('jawaban.index',compact('jawaban'));
    }

    public function create(){
    	return view('jawaban.form');
    }

    public function store(Request $request){
    	//$data = $request->all();
    	//unset($data["_token"]);
    	$new_jawaban = JawabanModel::save($request->all());
    		return redirect('/jawaban');
    } 

    public function edit($id){
        $jawaban = JawabanModel::find_by_id($id);
        return view('jawaban.edit', compact('jawaban'));
    }

    public function update($id, Request $request){
        $jawaban = JawabanModel::update($id, $request->all());
        return redirect('/jawaban');
    }

    public function destroy($id){
        $deleted = JawabanModel::destroy($id);
        return redirect('/jawaban');
    }

}
