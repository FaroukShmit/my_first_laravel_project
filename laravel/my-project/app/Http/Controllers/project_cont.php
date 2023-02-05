<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class project_cont extends Controller
{
    function show()
    {
       $data=DB::select("select * from isie_list_of_commissions___commissions_secondaires");
       $data2=DB::select("select * from isie_list_of_commissions___circonscriptions_electorales");
       $data3=DB::select("select * from candidates");
      
        return view('results',['data'=>$data, 'data2'=>$data2, 'data3'=>$data3]);
    }
}
