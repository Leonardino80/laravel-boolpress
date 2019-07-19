<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  // PARTE NN PIU NECESSARIA CON LE NUOVE ROUTES
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //   // e' un vincolo per poter utilizzare tutte le funzioni che ci son qua dentro
    //   // devi essere autenticato per usare index
    //     $this->middleware('auth');
    // }
    //
    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        return view('admin.home');
    }
}
