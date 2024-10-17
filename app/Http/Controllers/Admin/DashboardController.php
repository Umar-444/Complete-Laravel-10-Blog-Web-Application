<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Post;
use App\Models\User;


use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index(){

        $categories= Category:: count();
        $posts= Post:: count();
        $users= User::where('role_as','0')->count();
        $admins= User::where('role_as','1')->count();



        return view('admin.Dashboard',compact('categories','posts','users','admins'));


    }
}
//added data in dashboard
