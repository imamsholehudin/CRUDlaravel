<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('index', ['admins' => DB::table('admin')->paginate(15)]);
    }

    public function dashboard()
    {
        return view('layout.master');
    }
}