<?php

namespace App\Http\Controllers;
use App\Models\Adult;
use App\Models\Kid;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdultController extends Controller
{
    //
     
    function addData(Request $req)
    {
        $adult= new Adult;
        $adult->fname=$req->fname;
        $adult->mname=$req->mname;
        $adult->lname=$req->lname;
        $adult->save();
        return  redirect('viewadult')->with('message','A memmber  successfully Added!');


    }
    function showAdult()
    {

        $adult= Adult::all();
        return view('viewadult',['adults'=>$adult]);


    }
    function delete($id){
        $adult=Adult::findOrFail($id);
        $adult->delete();
        return redirect('viewadult');


        
    }
    
  

    

    
   
    
    
}
