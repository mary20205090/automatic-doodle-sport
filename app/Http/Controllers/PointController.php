<?php

namespace App\Http\Controllers;
use App\Models\Point;
use App\Models\Kid;
use App\Models\Adult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PointController extends Controller
{
    //
    public function bar()
    {   
        $adult = Adult::count();
        $kids = Kid::count();
        $game =  DB::table('points')->max('points');
        $min =  DB::table('points')->count('game');
        $total = $kids + $adult;
        $point = Point::all();
        $fetchAdults = Adult::latest()->get();
        return view('draft',compact('point','fetchAdults','kids','adult' ,'game','min' ,'total'));

    }
    
    function index()
    {
        $point = DB::select('select * from adults');
        $fetchAdults = Adult::latest()->get();
        return view('addpoints',compact('point','fetchAdults'));
    
    }
    

        
    
    function geById($id)
        {
            $point= Point::find($id);
            $fetchAdults = Adult::latest()->get();
            return view('addpoints',compact('point','fetchAdults')); 
        }
      
    function addPoints (Request $req)
    {
                // dd($req->all());

          $point = new  Point;
        $point->adult_id=$req->adult_id;
        $point->game=$req->game;
        $point->points=$req->points;
        $point->save(); 
        return redirect('viewpoints') ;
      }
      function viewAdult()
      {
        
       
                

          $point= Point::all(); 
          $fetchAdults = Adult::latest()->get();
          return view('adultpoints',compact('point','fetchAdults')); 

      }
   
      

      function deleteAdult($id){
        $adult=Point::findOrFail($id);
        $adult->delete();
        return redirect('adultpoints');


        
    }

    
    
      


      
     
       
}
