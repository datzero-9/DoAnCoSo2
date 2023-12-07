<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use App\Models\ImgProducts;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'category_id' => 'required',
            'photo' => 'required'
        ];

        $message = [
            'name.required' => 'vui lòng nhập tên sản phẩm ',
            'name.unique' => 'Sản phẩm này đã tồn tại trên hệ thống',

            'slug.required' => 'vui lòng nhập đường dẫn ',
            'slug.unique' => 'Đường dẫn này đã tồn tại trên hệ thống',


            'price.required' => 'vui lòng nhập nhập giá sản phẩm ',
            'price.integer' => 'vui lòng nhập số',

            'sale_price.required' => 'hãy nhập giá sản phảm KM, nếu không có thì nhập số 0',
            'sale_price.integer' => 'vui lòng nhập số',

            'category_id.required' => 'vui lòng nhập chọn danh mục ',
            'photo.required' => 'vui lòng chọn ảnh demo'
        ];
        $request->validate($rules, $message);

        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images', $fileName);
        $request->merge(['image' => $fileName]);

        try {
        //    dd($request -> all());
            $product = Products::create($request->all());
            
            if ($product && $request->hasFile('photos')) {
                foreach ($request->photos as $value) {
                    $fileNames = $value->getClientOriginalName();
                    $value->storeAs('public/images', $fileNames);
                    ImgProducts::create([
                        'product_id' => $product->id,
                        'image' => $fileNames
                    ]);
                }
                
            }
            return redirect()->route('product.index')->with('msg', 'Thêm thành công ');
        } catch (\Throwable $th) {
            return 'sao nó không hiện ';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {

        $categories = Category::all();
        // dd($products);
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {


        $rules = [
            'name' => 'required|unique:products,name,' . $request->id,
            'slug' => 'required|unique:products,slug,' . $request->id,
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'category_id' => 'required',
            'photo' => 'required'
        ];

        $message = [
            'name.required' => 'vui lòng nhập tên sản phẩm ',
            'name.unique' => 'Sản phẩm này đã tồn tại trên hệ thống',

            'slug.required' => 'vui lòng nhập đường dẫn ',
            'slug.unique' => 'Đường dẫn này đã tồn tại trên hệ thống',


            'price.required' => 'vui lòng nhập nhập giá sản phẩm ',
            'price.integer' => 'vui lòng nhập số',

            'sale_price.required' => 'hãy nhập giá sản phảm KM, nếu không có thì nhập số 0',
            'sale_price.integer' => 'vui lòng nhập số',

            'category_id.required' => 'vui lòng nhập chọn danh mục ',
            'photo.required' => 'vui lòng chọn ảnh demo'
        ];
        $request->validate($rules, $message);


        try {
            $product->update($request->all());
            return redirect()->route('product.index')->with('msg', 'update thành công ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('msg', 'update không thành công ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        try {

            DB::statement("SET FOREIGN_KEY_CHECKS=0");

            // Xóa sản phẩm
            $product->delete();

            // Kích hoạt lại ràng buộc khóa ngoại
            DB::statement("SET FOREIGN_KEY_CHECKS=1");

            return redirect()->route('product.index')->with('msg', 'xóa thành công ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'xóa không thành công ');
        }
    }
}
