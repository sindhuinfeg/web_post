<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxModel extends Model
{
    use HasFactory;
    public function add($a,$b){
    	$sum = $a + $b;
    	return $sum;
    }
    public function sub($a,$b){
    	$sub = $a - $b;
    	return $sub;
    }
    public function mul($a,$b){
    	$mul = $a * $b;
    	return $mul;
    }
    public function div($a,$b){
    	$div = $a / $b;
    	return $div;
    }
}
