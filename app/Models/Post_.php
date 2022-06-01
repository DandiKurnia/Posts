<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Dandi Kurnia",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam soluta suscipit tempore praesentium dolorum nobis sed sunt expedita, possimus ipsum laboriosam molestias! Excepturi velit nemo corporis repudiandae magnam soluta numquam autem, exercitationem tempora laborum. Facere fuga veritatis maiores dolor natus architecto labore iste assumenda, unde deleniti ea sapiente est ipsa eum voluptatum non corrupti. Deserunt adipisci consequatur ullam asperiores impedit aliquam, tempora aspernatur est iusto dolore repellat corporis autem aperiam voluptatibus mollitia voluptatem dolorem dignissimos dolor, praesentium perspiciatis animi?"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Kurnia Putra",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequuntur dolores animi facere explicabo libero architecto iure labore sed eaque veritatis corrupti, autem eum nemo perferendis quibusdam molestias maiores! Atque magni amet alias, sed laudantium dolorem odio? Libero, consequuntur aliquid, dignissimos enim consectetur facilis tenetur ratione facere, officia iste esse neque a earum error doloremque sint. Placeat deserunt deleniti quos cupiditate architecto praesentium harum quam non debitis eos, distinctio itaque maiores animi quae consectetur mollitia. Fugit ratione, tempore consectetur saepe assumenda mollitia alias ullam repellendus recusandae doloribus exercitationem at tenetur dicta qui eum odio. Nisi quod molestiae consequuntur voluptate qui?"
            ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
} 
