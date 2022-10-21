<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yudha Permana",
        "email" => "203040101@mail.unpas.ac.id",
        "image" => "yudha.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yudha Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nisi. Perferendis quod distinctio laudantium? Magni odit delectus beatae inventore, repudiandae voluptatum porro, doloribus nemo velit illum asperiores neque facilis? Commodi enim laborum voluptatibus eaque officiis eveniet voluptatem, libero cupiditate maiores numquam corporis rerum itaque quae doloribus dolores aspernatur. Quibusdam officia et consequuntur ipsa exercitationem vel quis asperiores beatae, non saepe est iste sed enim eos, 
            suscipit necessitatibus, nostrum id vitae debitis voluptas illo. Veritatis, optio non pariatur enim tempore fugiat?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agung Septiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veritatis quasi esse illo asperiores error natus quos! Sed amet placeat consectetur non corrupti fugiat, explicabo dolorem vel nemo earum asperiores minima corporis. Facere porro eaque esse iste cumque sint excepturi quo consequatur praesentium natus, obcaecati voluptatem, laudantium libero incidunt odit ex consequuntur aut dicta tempore. Nobis, reiciendis ducimus optio mollitia ut laudantium totam veniam similique temporibus, quo impedit illum voluptate sit vero maxime? Delectus dicta expedita perferendis temporibus unde dignissimos nulla cumque natus asperiores, 
            possimus repudiandae nobis mollitia quisquam totam sapiente ipsa placeat est quis? Alias vitae quam ipsam dolores!"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman sigle post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yudha Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nisi. Perferendis quod distinctio laudantium? Magni odit delectus beatae inventore, repudiandae voluptatum porro, doloribus nemo velit illum asperiores neque facilis? Commodi enim laborum voluptatibus eaque officiis eveniet voluptatem, libero cupiditate maiores numquam corporis rerum itaque quae doloribus dolores aspernatur. Quibusdam officia et consequuntur ipsa exercitationem vel quis asperiores beatae, non saepe est iste sed enim eos, 
            suscipit necessitatibus, nostrum id vitae debitis voluptas illo. Veritatis, optio non pariatur enim tempore fugiat?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agung Septiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veritatis quasi esse illo asperiores error natus quos! Sed amet placeat consectetur non corrupti fugiat, explicabo dolorem vel nemo earum asperiores minima corporis. Facere porro eaque esse iste cumque sint excepturi quo consequatur praesentium natus, obcaecati voluptatem, laudantium libero incidunt odit ex consequuntur aut dicta tempore. Nobis, reiciendis ducimus optio mollitia ut laudantium totam veniam similique temporibus, quo impedit illum voluptate sit vero maxime? Delectus dicta expedita perferendis temporibus unde dignissimos nulla cumque natus asperiores, 
            possimus repudiandae nobis mollitia quisquam totam sapiente ipsa placeat est quis? Alias vitae quam ipsam dolores!"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
