<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    $data = [
        'title' => 'Home',
    ];
    return view('home', $data);
});
Route::get('/posts', function () {
    // $posts = Post::all();
    // $posts = Post::with(['author','category'])->latest()->get();
    // dump(request('search'));

    // $posts = Post::latest();
    $posts = Post::filter(request(['search','category','author']))->latest()->paginate(10)->withQueryString();

    $data = [
        'title' => 'Blog',
        'posts' => $posts,
    ];
    
    return view('posts', $data);
});
Route::get('/contact', function () {
    $data = [
        'title' => 'Contact',
    ];
    return view('contact', $data);
});
Route::get('/about', function () {
    $data = [
        'title' => 'About',
    ];
    return view('about', $data);
});


Route::get('/posts/{post:slug}', function (Post $post) {
    $data = [
        'title' => 'Post',
        'post' => $post,
    ];
    return view('post', $data);
});

Route::get('/author/{user:username}', function (User $user) {
    // lazy eager Loading (agar query lebih efficient)
    // $posts = $user->posts->load('category','author');

    $data = [
        'title' => count($user->posts) . ' Artikel by '. $user->name,
        'posts' => $user->posts,
    ];
    return view('posts', $data);
});

Route::get('/categoris/{category:slug}', function (Category $category) {
    // lazy eager Loading (agar query lebih efficient)
    // $posts = $category->posts->load('category','author');

    $data = [
        'title' => 'Artikel in: '. $category->name,
        'posts' => $category->posts,
    ];
    return view('posts', $data);
});