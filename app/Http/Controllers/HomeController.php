<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kas;
use App\Models\Laptop;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $karyawan = Karyawan::count();
        $laptop = Laptop::count();
        $kas = Kas::count();
        
        return view('dashboard', compact('karyawan', 'laptop', 'kas'));
    }
}
