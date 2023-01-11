<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class DashboardController extends Controller
{
   public function redirect()
   {
    if (Auth::id())
        {
             if (Auth::user()->utype == 'ADM')
             {
                 return view("Dashboard.Admin.index");              
             }

             else
             {
                return view ("Dashboard.Normal.index");

             }
    
        }
        else 
        {
            return redirect()->back();
        }
    }
}
