<?php
namespace Hongen\Logok;
use DB;

class Logok{
    
	static public function info($v){
		DB::table('info')->insert(['info'=>$v,'created_at'=>date("Y-m-d H:i:s")]);
	}


}




?>