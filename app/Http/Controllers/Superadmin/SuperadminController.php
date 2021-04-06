<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index(){
        $title = 'Dashboard Superadmin';
        return view('superadmin.dashboardSuperadmin', [
            'title' => $title
        ]);
    }
}
