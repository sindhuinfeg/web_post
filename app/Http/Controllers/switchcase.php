<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\switchcaseModel;
use App\Http\Requests\switchcaseRequest;

class switchcase extends Controller
{

    public function switchcase_method(){
        $switchcase_model = new switchcaseModel;
        $result = $switchcase_model -> switchcase();
        return view('switchcase')->with('text',$result);	
    }
    public function switchcase_post_method(switchcaseRequest $request){
        $validation = $request -> validated();
        $model = new switchcaseModel;
        $result = $model->switchcaseaction($validation);
        return view('switchcaseResult')->with('firstnumber',$validation['first_number'])->with('secondnumber',$validation['second_number'])->with('result',$result);   

    }
}
