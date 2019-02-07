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
        // For more info on how to do validation check:
        // https://laravel.com/docs/master/validation
        $categoryData = $req->validate([
            'category.name' => 'required'
        ],[
            'category.name.required' => 'El nombre de la categoría es requerido'
        ]);
        Category::create($categoryData);
        return redirect()->route('admin.categories.index');
    }
}
