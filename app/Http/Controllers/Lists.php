<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPr;
class Lists extends Controller
{
    public function show(Request $request){

    	

    	return view('Ajouter');

    }

    public function deactivate(Request $request , $code){

              $ListPr =  ListPr::findOrFail($code);

                $ListPr->statut = 0 ;

                $ListPr->save();

                                return Redirect('showsecret');


    }
    public function activate(Request $request , $code){

                $ListPr =  ListPr::findOrFail($code);

                $ListPr->statut = 1 ;

                $ListPr->save();

                return Redirect('showsecret');

    }

    public function showsecret(Request $request){

        $data =  ListPr::all();

        return view('showsecret')->with('list' , $data);    
    }
    public function search(Request $request){

    	if ($request->method() == 'POST') {

    	 		$data =  ListPr::where('detail', 'like', '%' . $request->get('query') . '%')
    	 		->orWhere('name', 'like', '%' . $request->get('query') . '%')
                ->orWhere('phone', 'like', '%' . $request->get('query') . '%')
                ->orWhere('phone', 'like', '%' . $request->get('query') . '%')
                ->orWhere('wilaya', 'like', '%' . $request->get('query') . '%')
                ->where('statut' ,  '1')
                ->get();

    	 		return view('search')->with('list' , $data);	
		}
    	return view('search');


    }

    public function Add(Request $request){

    	if ($request->method() == 'POST') {

    		$all = [
           
            'name' =>  $request->get('name') ,
            'phone' =>  $request->get('phone') ,
            'wilaya' =>  $request->get('wilaya') ,
            'detail' =>  $request->get('detail') ,
           
      	  ] ;
        
        	$id = ListPr::create($all)->id;

         


        	return Redirect('done');
    	
   		}
    }
}
