<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends BaseController
{
    public function index(Request $req) {
        $blogs = Blog::all();
        $data = [];
        $data['blogs'] = $blogs;
        return view('blog.index', ['data' => $data]);
    }
}
