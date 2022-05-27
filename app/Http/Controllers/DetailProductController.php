<?php

namespace App\Http\Controllers;

use App\Models\Detail_Product;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetailProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $data['product'] = Product::where('slug', $slug)->first();
        $product = Product::where('slug', $slug)->first();
        $data['detail_product'] = Detail_Product::where('product_id', $product->id)->get();
        return view('admin.product-detail', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function saveUpload(Request $request)
    {

        $validatedData = $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        if ($request->TotalImages > 0) {

            for ($x = 0; $x < $request->TotalImages; $x++) {

                if ($request->hasFile('images' . $x)) {
                    $file      = $request->file('images' . $x);

                    $name = $file->getClientOriginalName();
                    $path = $file->move(public_path('/img/produk'), $name);

                    $insert[$x]['product_id'] = $request->id_product;
                    $insert[$x]['image'] = '/img/produk/' . $name;
                    $insert[$x]['created_at'] = date('Y-m-d H:i:s');
                    $insert[$x]['updated_at'] = date('Y-m-d H:i:s');
                }
            }

            Detail_Product::insert($insert);

            return response()->json(['success' => 'Multiple Image has been uploaded into db and storage directory']);
        } else {
            return response()->json(["message" => "Please try again."]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Detail_Product $detail_Product)
    {
        $slug = Product::select('slug')->get();
        $a = $product->slug;
        // $detail_Product->delete();
        echo json_encode($a);
        // return redirect('product-detail/' . $slug);
    }
}
