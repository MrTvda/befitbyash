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

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $blog = Blog::orderBy('id', 'desc')->simplePaginate(6);

      return view('blogs', compact('blog'));
    }

    public function viewBlogs() {
      return $this->blog();
    }

    public function blog() {
      $blogs = Blog::orderBy('id', 'desc')->get();

      return view('blog', compact('blogs'));
    }

    public function addBlog(Request $req) {
      $name = $req->input('name');
      $blog = $req->input('blog');

      $data = array('name' => $name, 'blog' => $blog);

      Blog::insert($data);

      return $this->blog();
    }

    public function removeBlog($id) {
      $image = Image::where('blog_id', $id)->get()->first();
      if($image) {
        unlink(public_path("/img/blogs/".$image->img_source));
        Image::where('blog_id', $id)->delete();
      }
      Blog::where('id', $id)->delete();

      return $this->blog();
    }

    public function userPage() {
      $user = User::all();
      return view('users', compact('user'));
    }

    public function changeUserRole($email) {
      $user = User::where('email', $email)->get()->first();

      if (($user -> user_role) == 'Admin') {
        User::where('email', $email)->update(['user_role' => 'User']);
      } else {
        User::where('email', $email)->update(['user_role' => 'Admin']);
      }

      return redirect()->back();
    }

    public function indexEditBlog($id) {
      $blog = Blog::where('id', $id)->get()->first();

      return view('editblog', compact('blog'));
    }

    public function editBlogName($id, Request $req) {
      $name = $req->input('name');
      $data = array('name' => $name);

      Blog::where('id', $id)->update($data);

      return redirect()->back();
    }

    public function editBlog($id, Request $req) {
      $blog = $req->input('blog');
      $data = array('blog' => $blog);

      Blog::where('id', $id)->update($data);

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

      $destinationPath = public_path('/img/blogs');
      $raw_image->move($destinationPath, $image);

      $data = array('blogname'=>$blogname, 'img_source'=>$image, 'img_size'=>$size, 'img_place'=>$place);

      $blog->image()->create($data);

      return redirect()->back();
    }

    public function removeImage($id) {
      $image = Image::where('id','=', $id)->get()->first();
      unlink(public_path("/img/blogs/".$image->img_source));
      Image::where('id','=', $id)->delete();

      return redirect()->back();
    }
}
