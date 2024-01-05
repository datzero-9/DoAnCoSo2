<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use App\Models\ImgProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $product;
    public function __construct()
    {
        $this->product = new Products();
    }
    public function index()
    {

        $products = Products::orderBy('created_at', 'desc')
            ->Search()
            ->paginate(3);
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
            'name' => 'required|max:150',
            'slug' => 'required|unique:products',
            'price' => 'required|numeric|gt:0',
            'sale_price' => 'required|numeric|lte:price',
            'category_id' => 'required',
            'photo' => 'required'
        ];

        $message = [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.max' => 'Tên sản phẩm không được vượt quá :max kí tự.',

            'slug.required' => 'Vui lòng nhập đường dẫn.',
            'slug.unique' => 'Đường dẫn này đã tồn tại trên hệ thống.',

            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'price.gt' => 'Giá sản phẩm phải lớn hơn 0 vnd.',

            'sale_price.required' => 'Vui lòng nhập giá sản phẩm khuyến mãi. Nếu không có, hãy nhập số 0.',
            'sale_price.numeric' => 'Giá sản phẩm khuyến mãi phải là số.',
            'sale_price.lte' => 'Giá khuyến mãi không được lớn hơn giá gốc.',


            'category_id.required' => 'Vui lòng chọn danh mục.',
            'photo.required' => 'Vui lòng chọn ảnh demo.'
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
            // 'photo' => 'required'
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
            // 'photo.required' => 'vui lòng chọn ảnh demo'
        ];
        $request->validate($rules, $message);


        if ($request->hasFile('photo')) {
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images', $fileName);
            $product->image = $fileName;
            // dd($product->image);
        }
        // Cập nhật các trường dữ liệu khác từ yêu cầu HTTP
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->category_id = $request->category_id;

        // Lưu các thay đổi vào cơ sở dữ liệu
        // dd($product->category_id);
        try {
            $product->save();
            return redirect()->route('product.index')->with('msg', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('msg', 'Cập nhật không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        try {

            // Xóa sản phẩm
            $product->delete();
            return redirect()->route('product.index')->with('msg', 'xóa thành công ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'xóa không thành công ');
        }
    }
}
