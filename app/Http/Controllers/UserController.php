<?php

namespace App\Http\Controllers;
use App\Models\LandingPages2;
use App\Models\Detail_Product;
use App\Models\Product;
use App\Models\team;
use App\Models\Visitor;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $data['product'] = Product::all();
        $data['landingpage'] = LandingPages2::first();
        $create = Visitor::create();
        return view ('index', $data);
    }

    public function produk(){
        $data['landingpage'] = LandingPages2::first();
        $data['product'] = Product::all();
        return view ('user.produk', $data);
    }

    public function produk_detail(Product $product){
        $data['landingpage'] = LandingPages2::first();
        $data['product'] = $product;
        $id = $product->id;
        $data['product_detail'] = Detail_Product::where('product_id' , $id)->get();
        return view('user.produk-detail' , $data);
    }

    public function tentangkami(){
        $data['landingpage'] = LandingPages2::first();
        $data['team'] = team::all();
        return view ('user.tentangkami', $data);
    }

    public function pemesanan(Product $product){
        $nama = $product->nama;
        // echo json_encode($nama);
        $url = "https://api.whatsapp.com/send?phone=081359652164&text=Halo%2C%20saya%20tertarik%20dengan%20$nama.%20%0AApakah%20masih%20tersedia%3F";
        return Redirect::to($url);
    }

}
