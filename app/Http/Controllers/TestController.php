<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

class TestController extends Controller
{
    //
    public function index(){
    	$testModel = new TestModel;
    	$result = $testModel->test();
    	$second = 'Second text';
    	return view('test')->with('text',$result)->with('second',$second);
    	// return 'Hello world';
    }
}
