<?php
namespace App\Http\Controllers;
use Auth;


use App\Http\Controllers\Controller;

class CreatePostController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'this is a test';
    }
    public function index(){
    	$post_text = $_POST['post_text'];
    	$author_id = Auth::user()->id;
    	\DB::table('posts')->insert(
  	    ['body' => $post_text, 'author_id' => $author_id]
);
    	return Auth::user()->id;
    	return "$post_text";
    }
}