<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class switchcaseModel extends Model
{
    use HasFactory;
    public function switchcase(){
    	//return 'Hello world from model';
    }
    public function switchcaseaction($data){
    	$a = $data['first_number'];
        $b = $data['second_number'];
        $calc_method = $data['calc_method'];
        //echo $calc_method;
        switch ($calc_method) {
        	case "add":
        		$result = $a + $b;
            
        		break;
        	case "sub":
        		$result = $a - $b;
                
        		break;
        	case "mul":
        		$result = $a * $b;
                
        		break;
        	case "div":
        		$result = $a / $b;
                
        		break;
        	
        	default:
        		echo "please select any one";
        		break;
        }
        return $result;
        //return 'hi';
    }
}
