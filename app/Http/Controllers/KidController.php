<?php

namespace App\Http\Controllers;
use App\Models\Kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    function addKid(Request $req)
    {
        $kid= new Kid;
        $kid->fname=$req->fname;
        $kid->mname=$req->mname;
        $kid->lname=$req->lname;
        $kid->save();
        return  redirect('viewkid')->with('message','A memmber  successfully Added!');


    }
    function showKid()
    {
        $kid= Kid::all();
        return view('viewkid',['kids'=>$kid]);


    }
    function deleteKid($id)
    {
     $kid = Kid::findOrFail($id);
     $kid->delete();
     return redirect('viewkid');
 
    }

   
   
}
