<?php

namespace App\Http\Controllers;

use App\Models\contact as ModelsContact;
use App\Models\Product;
use App\Models\team;
use App\Models\Visitor;
use Illuminate\Http\Request;

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
        $team = team::count();
        $visitor = Visitor::count();
        $product = Product::count();
        $contact = ModelsContact::where('status', '=', 2)->count();
        return view('admin/index', compact('team','product','contact','visitor'));
    }
}
