<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calculationModel;
use App\Http\Requests\CalculationRequest;

class calculationController extends Controller
{
    public function calculationNumbers(){
    	$testModel = new calculationModel;
    	$result = $testModel->calculation();
    	return view('calculation')->with('text',$result);
    	/*$result = new calculationModel;
    	$submit = $result->calculation();
    	return view('calculation')->with('a',$a)->with('b',$b)->with('sum',$result);*/
    }
    public function post_method(CalculationRequest $request){
    	$validated = $request->validated();
    	$calculationModel = new calculationModel;
    	$result = $calculationModel->calculate($validated);//dd($validated['first_number']);
        //return $validated['first_number'];
        //$result = $add->add($a,$b);
        //return view('add')->with('a',$a)->with('b',$b)->with('sum',$result);
    	return view('total_result')->with('firstnumber',$validated['first_number'])->with('secondnumber',$validated['second_number'])->with('result',$result);
    }
}
