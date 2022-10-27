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
        
       
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();

         
        $point=  DB::table('adults')
        ->join('points','adult_id',"=",'points.adult_id')
        ->select('adults.*','points.game','points.points')
        ->get();
 
        //   $point= Point::all(); 
        //   $fetchAdults = Adult::latest()->get();
          return view('adultpoints',compact('point')); 

      }
   
      

      function deleteAdult($id){
        $adult=Point::findOrFail($id);
        $adult->delete();
        return redirect('adultpoints');


        
    }

    
    
      


      
     
       
}
