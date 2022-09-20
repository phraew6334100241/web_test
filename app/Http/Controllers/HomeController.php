<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Http\customers;
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
        return view('home');
    }

    public function page()
    {
        //dd('รีเทิร์นไปยังหน้า view ชื่อว่า page  ในหน้านี้มีข้อความแสดงว่า ยินดีต้อนรับสู่หน้าต่างของฉัน');
        return view('page');
    }

    public function savecustomers(Request $req){
        $profile = new profile;
        $profile->fist_name = $req->fist_name;
        $profile->last_name = $req->last_name;
        $profile->email = $req->email;
        $profile->phone = $req->phone;
        $profile->save();

        return view('postcustomers');
    }

}
    

    
