<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use App\Models\stude;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class AuthController extends Controller
{
 
public function index()
    {
        return view('login' );
    }   
 
    function addUser()
    {
        return view('addUser');
    }
public function validate_add(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);
            
        $data = $request->all();
        User::create([     
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);
        return redirect("login")->with('success','registration completed, you can login ');
    }   
    
    public function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    //    dump($credentials);
        if (Auth::attempt($credentials)) {
           
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
   
       return redirect("login")->withErrors('Login details are not valid');
    }
 
        /*
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard')
            ->with('success','Logged in');
        }
      
        return redirect('login')->with('success', 'Login details are not valid');     
      */
      

  public function dashboard()
    {
        if(Auth::check())
         {
            return redirect('home');
        }
        return redirect('login')->with('success','are not allowed to access');
    }   
public function logout() {

        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}