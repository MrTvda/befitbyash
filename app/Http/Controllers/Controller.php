<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Blog;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $blog = Blog::all()->sortByDesc('id');

      return view('blogs', compact('blog'));
    }

    public function blog() {
      $blog = Blog::all();

      return view('blog', compact('blog'));
    }

    public function addBlog(Request $req) {
      // Aanvragen input van pagina
      $name = $req->input('name');
      $blog = $req->input('blog');

      $data = array('name'=>$name, 'blog'=>$blog);

      // Data struren naar database
      DB::table('blog')->insert($data);
      // Terugverwijzen naar vorige pagina met succes alert
      return redirect()->back();
    }

    public function removeBlog($id) {
      DB::table('blog')->where('id', $id)->delete();
      return redirect()->back();
    }

}
