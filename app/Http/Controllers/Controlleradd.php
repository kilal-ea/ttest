<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Import User model if located in App\Models namespace

class Controlleradd extends Controller {
    public function viewconection(Request $req) {
        $userId = $req->session()->get('user_id');
        if (!$userId) {
            return view('conection');
        }
        else{
            $userId = $req->session()->get('user_id');
            $user = User::find($userId);
            return view('dashboard',['user' => $user]);
        }
        
    }
    
    public function conection(Request $req) {
        $email = $req->input('email');
        $pass = $req->input('pass');
        $user = DB::table('users')->where('email', $email)->first();
        if ($user) {
            if ($pass==$user->password) {
                $req->session()->put('user_id', $user->id);
                return view('dashboard');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function dashboard(Request $req) {
        
        $userId = $req->session()->get('user_id');
        $user = User::find($userId);
        if ($user) {
            return view('dashboard',['user' => $user]);
        }
        else{
            return view('conection');
        }
    }
    public function users() {
        $users = DB::table('users')->get();
        return view('users', ['users' => $users]);
    }
    public function Clinet(Request $req) {
        $userId = $req->session()->get('user_id');
        $user = User::find($userId);
        if ($user) {
            return view('addclient',['user' => $user]);
        }
        else{
            return view('conection');
        }
        
    }
    public function addClinet(Request $req) {
        $userId = $req->session()->get('user_id');
        $user = User::find($userId);
        if ($user) {
            $nom = $req->input('nom');
            $prenom = $req->input('prenom');
            $phone = $req->input('telephone');

            $Clinet = DB::table('clients')->insertGetId([
                'nom' => $nom,
                'prenom' => $prenom,
                'tele' => $phone,
            ]);
            return view('dashboard',['user' => $user]);
        }
        else{
            return view('conection');
        }
        
    }
    public function affpro(Request $req) {
        $userId = $req->session()->get('user_id');
        $user = User::find($userId);
        if ($user) {
            $Clinet = DB::table('products')->get();
            return view('pro',['Clinet' => $Clinet ]);
        }
        else{
            return view('conection');
        }
        
    }
    public function getCheckedProducts(Request $req)
    {
        $userId = $req->session()->get('user_id');
        {
            $userId = $req->session()->get('user_id');
        
            if ($userId) {
                $checkedProductIds = $req->input('tems', []);
                $checkedProducts = DB::table('products')->whereIn('id', $checkedProductIds)->get();
        
                return view('checked_products', ['checkedProducts' => $checkedProducts]);
            } else {
                return view('conection');
            }
        
    }
}
}
