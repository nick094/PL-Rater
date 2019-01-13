<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function __construct() 
    {
    	$credit = array(
		  "1" => "0.7",
		  "2" => "0.8",
		  "3" => "0.85",	
		  "4" => "0.90",
		  "5" => "0.95",
		  "6" => "1",
		  "7" => "1.05",
		  "8" => "1.10",
		  "9" => "1.15"		  		  		  		  		  		  	  
		);

		$lob = array('1'=> 'HO-3',
					'2' => 'DP-1',
					'3' => 'DP-3'
	    );

		$state = array('1' => 'LA',
					'2' => 'CA',
					'3' => 'FL'
	    );

		$med_pay = array('1' => '1000',
					'2' => '2500',
					'3' => '5000'
	    );

		$aop = array('1' => '1',
					'2' => '2',
					'3' => '3',
					'4'=> '5'
	    );


		$constr_type = array('1' => 'Frame',
					'2' => 'JM',
					'3' => 'MV',
					'4'=> 'MNC'
	    );

		$pc = array('1' => '1',
					'2' => '2',
					'3' => '3',
					'4'=> '4',
					'5' => '5'
	    );

		$yes_no = array('1' => 'yes',
						'2' => 'no'
					
	    );
    
    }
}
