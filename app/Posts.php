<?php 
namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;
// instance of Posts class will refer to posts table in database
class Posts extends Model {
  //restricts columns from modifying
  protected $guarded = [];
  // posts has many comments
  // returns all comments on that post
  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User','author_id');
  }
  public function title()
  {
    return $this->belongsTo('App\Posts', 'title');
  }
  public function body()
  {
    return $this->belongsTo('App\Posts', 'body');
  }
  public static function createPost()
  {
      $post_text = $_POST['post_text'];
      $title = $_POST['title'];
      $author_id = Auth::user()->id;
      \DB::table('posts')->insert(
      ['body' => $post_text, 'author_id' => $author_id]
);
  }
  public static function viewUserPosts()
  {
    $uid = Auth::user()->id;
    $posts = DB::table('posts')->where('author_id', $uid)->get();
    if ($posts)
    {
    return $posts;
    }
    else
    {
      return "Sorry no posts associated with this user!";
    }
  }
}