<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Blog;
use App\User;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $blog = Blog::simplePaginate(5);

      return view('blogs', compact('blog'));
    }

    public function index2() {
      $blog = Blog::simplePaginate(4);

      return view('blogs2', compact('blog'));
    }

    public function blog() {
      $blog = Blog::paginate(3);

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

    public function userPage() {
      $user = User::all();
      return view('users', compact('user'));
    }

    public function changeUserRole($email) {
      $user = DB::table('users')->where('email', $email)->get()->first();

      if (($user -> user_role) == 'Admin') {
        User::where('email', $email)->update([
          'user_role' => 'User',
        ]);
      } else {
        User::where('email', $email)->update([
          'user_role' => 'Admin',
        ]);
      }

      return redirect()->back();
    }

}
