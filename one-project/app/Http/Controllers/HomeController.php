<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
// $currentuser = User::find($id);
// $user = $currentuser->name;
// $role = Role::find($id);
// $rolename = $role->title;

        return view('home', [
            'id' => $id,
            'name' => $name,
            'email' => $email,
        ]);
    }
}
