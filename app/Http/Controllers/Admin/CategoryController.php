<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends BaseController
{
    public function index(Request $req) {
        $categories = Category::all();
        $data = [];
        $data['categories'] = $categories;
        return view('admin.categories.index', ['data' => $data]);
    }

    public function create(Request $req) {
        $data = [];
        return view('admin.categories.create', ['data' => $data]);
    }

    public function store(Request $req) {
        $categoryData = $req->input('category');
        Category::create($categoryData);
        return redirect()->route('admin.categories.index');
    }
}
