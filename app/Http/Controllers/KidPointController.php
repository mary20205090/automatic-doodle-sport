<?php

namespace App\Http\Controllers;
use App\Models\Kidpoint;
use App\Models\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KidPointController extends Controller
{
    //
    function index()
    {
        $child = DB::select('select * from kids');
        $fetchKids = Kid::latest()->get();
        return view('updatekid',compact('child','fetchKids'));

    }
    function getById($id)
    {
        $child= Kidpoint::find($id);
        $fetchKids = Kid::latest()->get();
        return view('updatekid',compact('child','fetchKids'));
    }
    function addPoint(Request $req)
    {
        //  dd($req->all());

     $child =  new Kidpoint;
     $child->kid_id=$req->kid_id;
     $child->game=$req->game;
     $child->points=$req->points;
     $child->save(); 
     return redirect('view') ;
   }
   function viewKid()
   {
    $child= Kidpoint::all();
    $fetchKids = Kid::latest()->get();
    return view('viewallkids',compact('child','fetchKids'));

   }
  
    }

