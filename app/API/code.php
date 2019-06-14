<?php 

namespace App\API;

class Code 
{
	
	function __construct()
	{
		
	}

	public static function  __code($prefijo) {
     $a = array();
     $b = '-';
    $a[0] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
    $a[1] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);
    $a[2] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
    $a[3] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
    $a[8] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);

    $a[4] = rand(100, 999);
    $a[5] = rand(1000, 9999);
    $a[6] = rand(10, 99);
    $a[7] = rand(10000, 99999);


    $variable= $prefijo.$b.$a[1].$a[6].$b.$a[0].$a[2].$a[4].$b.$a[7].$a[3].$b.$a[5].$a[8];
    return $variable;
   }

   public static function code_group(){
     $a = array();
     $a[0] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
     $a[1] = $a[4] = rand(10, 99);
     $a[2] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
     $a[3] = rand(0, 9);
     $a[4] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 9);
     $a[5] = rand(10, 99);
      $a[6] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);

    return $a[0].$a[1].$a[2].$a[3].$a[4].$a[5].$a[6];
   }

   

}


 ?>