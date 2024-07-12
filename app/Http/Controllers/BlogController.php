<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index()
    {


        $posts = Post::published()->orderByDesc('published_at')->paginate(13);




        return view('pages.blog.index', ['posts' => $posts,]);
    }
    public function show(Post $post)
    {
        // Pobierz 4 najnowsze posty, aby mieć pewność, że będziemy mieć 3 posty, nawet po odfiltrowaniu aktualnego
        $posts = Post::published()->orderByDesc('published_at')->take(4)->get();
    
        // Filtrujemy aktualny post
        $filteredPosts = $posts->filter(function ($p) use ($post) {
            return $p->id !== $post->id;
        });
    
        // Jeżeli mamy więcej niż 3 posty po filtracji, obcinamy kolekcję do 3 postów
        $latestPosts = $filteredPosts->take(3);
    
       
    
        return view('pages.blog.show', ['post' => $post, 'latestPosts' => $latestPosts]);
    }
}
