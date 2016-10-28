<?php

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Posts;
use App\Http\Controllers\Controller;



class PostController extends Controller
{
    //
    public function index()
  {
    //fetch 5 posts from database which are active and latest
    $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(5);
    //page heading
    $title = 'Latest Posts';
    //return home.blade.php template from resources/views folder
    return view('home')->withPosts($posts)->withTitle($title);
  }
  public function create()
  {
    // if user can post i.e. user is admin or author
    Posts::createPost(); 
 
  }
  public static function viewUserPosts(){
    //return all posts associated with current user id
    Posts::viewUserPosts();
  }
}
