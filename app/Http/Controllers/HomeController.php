<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allBlogs =new Blog();

        return view('home', ['blogs'=> $allBlogs->all()]);
    }
    public function addBlog()
    {
        return view('add-blog');
    }
    public function insertNBlog(Request $req)
    {
        Blog::createBlog($req);
        return redirect()->back()->with('msg', "Blog Added");
//        return $request->all();
//        return view('add-blog');
    }
    function blogDetails($id){
        $blog = Blog::find($id);
        return view('blog-details',['blog'=>$blog]);
    }
    function manageBlog(){
        $blogs =Blog::all();
        return view('manage-blog', ['blogs'=>$blogs]);
    }

    function deleteBlog($id){
        Blog::deleteSBlog($id);
        return redirect('manage-blog');
    }
    function editBlog($id){
       $blog = Blog::find($id);
       return view('edit-blog', ['blog'=>$blog]);
    }

    function updateBlog(Request $req , $id){
        Blog::updateSblog($req , $id);
    }
}
