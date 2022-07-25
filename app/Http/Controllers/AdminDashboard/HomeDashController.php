<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeDashController extends Controller
{
    public function index(){
        return view('admin_dash_home.index', [
            'title' =>'Admin Dashboard | CCI Summit 2022',
        ]);
    }
}
