<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Image;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $blog = Blog::orderBy('id', 'desc')->simplePaginate(6);

      return view('blogs', compact('blog'));
    }

    public function index2() {
      $blog = Blog::orderBy('id', 'desc')->simplePaginate(6);

      return view('blogs2', compact('blog'));
    }

    public function blog() {
      $blog = Blog::orderBy('id', 'desc')->paginate(6);

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

    public function indexEditBlog($id) {
      $blog = Blog::where('id', $id)->get()->first();
      // $image = Images::where('blogname', $blog->name)->get()->first();

      return view('editblog', compact('blog'));
    }

    public function editBlog($id, Request $req) {
      $newData = $req->input('blog');
      $data = array('blog' => $newData);

      Blog::where('id', $id)->update(['blog' => $req->input('blog')]);

      return redirect()->back();
    }

    public function addImage(Request $req, $id) {
      $blog = Blog::where('id', $id)->get()->first();
      $blogname = $blog->name;
      $size = $req->size;
      $place = $req->place;
      $raw_image = $req->file('image');
      $image = $raw_image->getClientOriginalName();
      $name = pathinfo($image,PATHINFO_FILENAME);
      $current_name = $name;
      $extension = pathinfo($image, PATHINFO_EXTENSION);

      $i = 1;
      while(file_exists('img/'.$current_name.".".$extension))
      {
          $current_name = (string)$name."_".$i;
          $image = $current_name.".".$extension;
          $i++;
      }

      $destinationPath = public_path('/img');
      $raw_image->move($destinationPath, $image);

      $data = array('blogname'=>$blogname, 'img_source'=>$image, 'img_size'=>$size, 'img_place'=>$place);

      $blog->image()->create($data);

      return redirect()->back();
    }

    public function removeImage($id) {
      $image = DB::table('images')->where('id','=', $id)->get()->first();
      unlink(public_path("/img/".$image->img_source));
      Image::where('id','=', $id)->delete();

      return redirect()->back();
    }
}
