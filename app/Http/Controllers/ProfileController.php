<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     // Method to return the profile view
    public function index(){
        $data['user'] = auth()->user();
        // Return the view for the profile page
        return view('profile')->with($data);
    }
}
