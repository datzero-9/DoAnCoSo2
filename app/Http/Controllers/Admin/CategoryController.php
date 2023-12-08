<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\Category\StoreCategoryRequest;



class CategoryController extends Controller
{
    private $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $categories = $this->category->getAll();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        // dd($categories);
        return view('admin.category.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories'

        ];
        $message = [
            'name.required' => 'bắt buộc nhập thông tin',
            'name.unique' => 'sản phẩm này đã tồn tại',

        ];

        $request->validate($rules, $message);

        // $this->category->addCategory($request);
        // return redirect()->route('category.index')->with('msg', 'Thêm người dùng thành công');
        try {

            Category::create($request->all());

            return redirect()->route('category.index')->with('msg', 'thêm mới thành công ');


        } catch (\Throwable $th) {
            return redirect()->route('category.create')->with('msg', 'thêm thất bại ');
        }
    }

    public function search()
    {
        return 'ok';
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
    public function edit(Category $category)
    {

        $categories = Category::all();
        // dd($category);
        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {


        $rules = [
            'name' => 'required|unique:categories,name,' . $request->id

        ];
        $message = [
            'name.required' => 'bắt buộc nhập thông tin',
            'name.unique' => 'sản phẩm này đã tồn tại',

        ];

        $request->validate($rules, $message);
        try {
            $category->update($request->all());
            return redirect()->route('category.index')->with('msg', 'update thành công ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('msg', 'update không thành công ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Category $category)
    {
       
        try {
            DB::statement("SET FOREIGN_KEY_CHECKS=0");

            // Xóa sản phẩm
            $category->delete();

            // Kích hoạt lại ràng buộc khóa ngoại
            DB::statement("SET FOREIGN_KEY_CHECKS=1");
            
            return redirect()->route('category.index')->with('msg', 'xóa thành công ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('msg', 'xóa không thành công ');
        }
    }
}
