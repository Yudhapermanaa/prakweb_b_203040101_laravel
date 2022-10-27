<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Yudha Permana',
            'email' => 'pyudha196@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Agung Septiana',
            'email' => 'agung@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, libero!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, libero! ad ratione dolorem harum quidem, animi voluptatibus debitis itaque fugit ullam delectus sed iusto error natus quam earum placeat eius veritatis quibusdam nisi aspernatur nobis officiis et.Minima sunt necessitatibus laudantium rerum fuga alias iste nemo culpa facilis incidunt totam fugit officia, eum mollitia dolorem sapiente delectus veniam, architecto cupiditate tempora? Numquam odio quod nemo, eaque tenetur sequi laboriosam velit nihil. Molestiae expedita dignissimos reiciendis soluta laborum, velit.aperiam non facilis tempore odio molestias exercitationem enim corporis veritatis id repudiandae atque voluptate rem consequuntur eveniet corrupti. Sed deserunt aperiam enim soluta blanditiis alias? Atque nobis blanditiis laudantium similique saepe unde laborum officiis. Cupiditate, iste. Quae reprehenderit temporibus possimus ab alias similique dolor sunt hic dolore, dolorum, fugit laudantium delectus rem? Necessitatibus odit repellat, velit quam corporis dolore possimus, est itaque accusamus ex aliquid aut tenetur ut excepturi sapiente quaerat dicta?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, libero!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, libero! ad ratione dolorem harum quidem, animi voluptatibus debitis itaque fugit ullam delectus sed iusto error natus quam earum placeat eius veritatis quibusdam nisi aspernatur nobis officiis et.Minima sunt necessitatibus laudantium rerum fuga alias iste nemo culpa facilis incidunt totam fugit officia, eum mollitia dolorem sapiente delectus veniam, architecto cupiditate tempora? Numquam odio quod nemo, eaque tenetur sequi laboriosam velit nihil. Molestiae expedita dignissimos reiciendis soluta laborum, velit.aperiam non facilis tempore odio molestias exercitationem enim corporis veritatis id repudiandae atque voluptate rem consequuntur eveniet corrupti. Sed deserunt aperiam enim soluta blanditiis alias? Atque nobis blanditiis laudantium similique saepe unde laborum officiis. Cupiditate, iste. Quae reprehenderit temporibus possimus ab alias similique dolor sunt hic dolore, dolorum, fugit laudantium delectus rem? Necessitatibus odit repellat, velit quam corporis dolore possimus, est itaque accusamus ex aliquid aut tenetur ut excepturi sapiente quaerat dicta?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, libero!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, libero! ad ratione dolorem harum quidem, animi voluptatibus debitis itaque fugit ullam delectus sed iusto error natus quam earum placeat eius veritatis quibusdam nisi aspernatur nobis officiis et.Minima sunt necessitatibus laudantium rerum fuga alias iste nemo culpa facilis incidunt totam fugit officia, eum mollitia dolorem sapiente delectus veniam, architecto cupiditate tempora? Numquam odio quod nemo, eaque tenetur sequi laboriosam velit nihil. Molestiae expedita dignissimos reiciendis soluta laborum, velit.aperiam non facilis tempore odio molestias exercitationem enim corporis veritatis id repudiandae atque voluptate rem consequuntur eveniet corrupti. Sed deserunt aperiam enim soluta blanditiis alias? Atque nobis blanditiis laudantium similique saepe unde laborum officiis. Cupiditate, iste. Quae reprehenderit temporibus possimus ab alias similique dolor sunt hic dolore, dolorum, fugit laudantium delectus rem? Necessitatibus odit repellat, velit quam corporis dolore possimus, est itaque accusamus ex aliquid aut tenetur ut excepturi sapiente quaerat dicta?',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, libero!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, libero! ad ratione dolorem harum quidem, animi voluptatibus debitis itaque fugit ullam delectus sed iusto error natus quam earum placeat eius veritatis quibusdam nisi aspernatur nobis officiis et.Minima sunt necessitatibus laudantium rerum fuga alias iste nemo culpa facilis incidunt totam fugit officia, eum mollitia dolorem sapiente delectus veniam, architecto cupiditate tempora? Numquam odio quod nemo, eaque tenetur sequi laboriosam velit nihil. Molestiae expedita dignissimos reiciendis soluta laborum, velit.aperiam non facilis tempore odio molestias exercitationem enim corporis veritatis id repudiandae atque voluptate rem consequuntur eveniet corrupti. Sed deserunt aperiam enim soluta blanditiis alias? Atque nobis blanditiis laudantium similique saepe unde laborum officiis. Cupiditate, iste. Quae reprehenderit temporibus possimus ab alias similique dolor sunt hic dolore, dolorum, fugit laudantium delectus rem? Necessitatibus odit repellat, velit quam corporis dolore possimus, est itaque accusamus ex aliquid aut tenetur ut excepturi sapiente quaerat dicta?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
