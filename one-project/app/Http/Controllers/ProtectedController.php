<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    public function index() {
        return view('home', [
            'company' => 'my_company',
        ]);
    }
}
