<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersModel;
use App\Models\articlesModel;

class DashboardController extends Controller
{
    public function index()
    { 
        $data['users'] = usersModel::all();
        return view('pages.dashboard',$data);
    }
    
    public function pages()
    {
        return view('pages.pages');
    }
}
