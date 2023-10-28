<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaxModel;

class MaxController extends Controller
{	
	
    public function addition(){
    	$add = new MaxModel;
    	$a = 5;
		$b = 4;
    	$result = $add->add($a,$b);
    	return view('add')->with('a',$a)->with('b',$b)->with('sum',$result);
    }
    public function subtraction(){
		$sub = new MaxModel;
    	$a = 5;
		$b = 4;
    	$sub_result = $sub->sub($a,$b);
    	return view('sub')->with('a',$a)->with('b',$b)->with('sub',$sub_result);

    }
    public function multiplication(){
    	$mul = new MaxModel;
    	$a = 4; $b = 2;
    	$mul_result = $mul->mul($a,$b);
    	return view('mul')->with('a',$a)->with('b',$b)->with('mul',$mul_result);
    }
    public function division(){
    	$div = new MaxModel;
    	$a = 6; $b = 3;
    	$div_result = $div->div($a,$b);
    	return view('div')->with('a',$a)->with('b',$b)->with('div',$div_result);
    }
}
