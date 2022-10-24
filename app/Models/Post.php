<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
