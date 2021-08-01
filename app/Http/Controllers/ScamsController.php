<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\scams;
use App\Models\User;
use App\Models\orders;
use Redirect;

use Auth;
class ScamsController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 			
    		$scams = \App\Models\scams::all();
 			 return view('scams')
            ->with('scams', $scams);
    }

    public function getScams(Request $request , $scamsid){

    	$scams = \App\Models\scams::findOrFail($scamsid);

    	$money = Auth::user()->money;

    	$id = Auth::user()->id;

    	// if scama already buyed 

    	// search in order 

    $oldorder = \App\Models\orders::query()->where('user', $id)->where('scams_id', $scams->id )->get();

    	if (!$oldorder->isEmpty()) {
    		
    		return view('showscama')
            ->with('scams', $scams)->with('scams_data', $scams);
    	}


    	if ($request->method() == 'POST') {

    		// remove money from user
    		

    		if ($scams->price <= $money) {
    			
    			// remove money from user account

    			$users =  User::findOrFail($id);

    			$users->money = $money - $scams->price ;

                $users->save();


    			// create transaction 

    		$all = [
           
            'user' => $id ,
            'scams_id' => $scams->id,
            'price' => $scams->price,
            'statut' => 1 , 
      	  ] ;
        
        	$orders = orders::create($all);

        	 return redirect('scams/' . $scams->id);
    		} else {

    			    return Redirect::back()->withErrors('You dont have money on your your account ! ');

    		}

    	}

 			 return view('showscama')
            ->with('scams', $scams);
    }
}
