<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function getOne($id)
   {
      $post = Post::where('id', $id)->first();
      echo '<h3>' . $post['title'] . '</h3>' . '</p>' . $post['desc'] . ' ' . $post['date'] . '</p>';
      echo '<a href="' . url("test/edit/{$post->id}") . '">Редактировать запись №' . $post['id'] . '</a> ';
   }

   public function getAll()
   {
      $posts = Post::all();
      foreach ($posts as $post) {
         echo $post['id'] . '<a href="' . $post['id'] . '"> ' . $post['title'] . '</a> ' . $post['desc'] . ' ' . $post['date'] . '<br/>';
         echo '<p><a href="' . url("test/edit/{$post->id}") . '">Редактировать запись №' . $post['id'] . '</a></p>' . '<br/>';
      }
   }

   public function editPost(Request $request, $id)
   {
      $post = Post::find($id);

      if ($request->has('submit')) {
         $post->title = $request->title;
         $post->desc = $request->desc;
         $post->date = $request->date;
         $post->text = $request->text;
         $post->save();
      }
      return view('test.editPost', ['post' => $post]);
   }

   public function newPost(Request $request)
   {
      if ($request->isMethod('get')) {
         return view('test.new');
      }
      $post = new Post;
      $post->title = $request->title;
      $post->desc = $request->desc;
      $post->text = $request->text;
      $post->date = $request->date;
      $post->save();

      $title = $request->input('title');
      $desc = $request->input('desc');
      $text = $request->input('text');
      $date = $request->input('date');
      return view('test.result', ['attention' => 'В БД добавлено: ', 'title' => $title, 'desc' => $desc, 'text' => $text, 'date' => $date]);
   }

   public function delPost(Request $request, $id)
   {
      $post = Post::find($id);
      if ($post == null) {
         return view('test.404');
      }
      $del = $post->title;

      if ($request->isMethod('get')) {
         return view('test.del', ['post' => $post]);
      }
      if ($request->has('submit')) {
         $post->title = $request->title;
         $post->delete();
      }
      return view('test.delPost', ['attention' => 'Из БД удалено: ', 'title' => $del]);
   }
}

?>