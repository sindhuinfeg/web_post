<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculationModel extends Model
{
    use HasFactory;
    public function calculation(){
    	return 'Hello world from model';
    }
    public function calculate($data){
        $a = $data['first_number'];
        $b = $data['second_number'];
    	//dd($data);
    	if($data['calc_method']=="add"){
    		$total = $a + $b;
            return $total;
    	}elseif ($data['calc_method']=="sub") {
            $total = $a - $b;
            return $total;
        }elseif ($data['calc_method']=="mul") {
            $total = $a * $b;
            return $total;
        }elseif ($data['calc_method']=="div") {
            $total = $a / $b;
            return $total;
        }else{
            return 'hi';
        }
    }
}
