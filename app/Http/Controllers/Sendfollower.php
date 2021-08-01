<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\codes;
use Carbon\Carbon;
class Sendfollower extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 			
 			 return view('sendfollower');
    }

    public function history(){

    	$all = codes::where('from', Auth::user()->name)->where('used' , 1)->orderBy('id', 'desc')->get();

    	return view('history')->with('all' , $all);
    }

    public function show($code){

    	return view('sendfollower')->with('code' , $code);

    }

    public function me(){

        $do =   codes::where('from' , Auth::user()->name )->where('used' , 1)->whereBetween('created_at', [Auth::user()->payout, Carbon::now()])->sum('num');



        $data = ['max' => Auth::user()->max 
            , 'current' =>$do , 
            'payed' => $do  / 1000 * 750 , 
            'sum' => codes::where('from' , Auth::user()->name )->where('used' , 1)->whereBetween('created_at', [Auth::user()->payout, Carbon::now()])->sum('total')
            ];

        return view('me')->with('all' , $data);

    }

    public function send(Request $request){

    	if ($request->method() == 'POST') {

    		$all = [
           
            'code' =>  strtoupper(substr(md5(time().rand(10000,99999)), 0, '8')) ,
            'user' => '',
            'from' =>  Auth::user()->name,
            'used' => 0 ,
            'num' => $request->get('num'),
            'price'=> $request->get('price'),
            'note'=>$request->get('note'),
            'total'=>$request->get('num') / 1000 * $request->get('price')  ,
      	  ] ;
        
        	$id = codes::create($all)->code;

            $user = Auth::user();
            $user->current = Auth::user()->current + $request->get('num') ;
                    $user->save();



        	return Redirect('sendfollower/' . $id);
    	
   		}


    }

}
