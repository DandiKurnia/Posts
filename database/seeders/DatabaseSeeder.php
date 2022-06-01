<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::create([
        //     'name'=> 'Dandi Kurnia',
        //     'email' => 'dandikurnia608@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=> 'Putra Kurnia',
        //     'email' => 'dandiputra3105@gmail.com',
        //     'password' => bcrypt('310505')
        // ]);

        \App\Models\User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla,',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla, eius molestiae reiciendis temporibus atque error.</p> Explicabo quaerat culpa fugit laudantium, voluptatibus. <p> illum aut, et quis doloribus nam beatae. Adipisci atque, consequuntur tenetur laudantium in tempore dolore saepe voluptas possimus. Soluta similique illo asperiores officiis, dolore hic recusandae obcaecati, itaque voluptates fugit minima molestiae totam cumque nihil quod. </p><p> ex aliquam optio, esse a deleniti modi commodi ratione voluptas fugiat. Fuga unde numquam quisquam obcaecati, minus voluptas harum molestias corrupti iure dignissimos? Soluta, pariatur? At quis corporis.</p> <p> dolorem reprehenderit delectus eius possimus laborum rerum doloremque inventore obcaecati ex illo minus earum corrupti! Itaque impedit ut optio provident iste architecto deleniti officiis sit quia corrupti, quisquam rerum nam. Possimus aliquam at nulla pariatur in incidunt autem cupiditate quasi perspiciatis, sint voluptates consequatur eum eligendi excepturi ut?.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla,',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla, eius molestiae reiciendis temporibus atque error.</p> Explicabo quaerat culpa fugit laudantium, voluptatibus. <p> illum aut, et quis doloribus nam beatae. Adipisci atque, consequuntur tenetur laudantium in tempore dolore saepe voluptas possimus. Soluta similique illo asperiores officiis, dolore hic recusandae obcaecati, itaque voluptates fugit minima molestiae totam cumque nihil quod. </p><p> ex aliquam optio, esse a deleniti modi commodi ratione voluptas fugiat. Fuga unde numquam quisquam obcaecati, minus voluptas harum molestias corrupti iure dignissimos? Soluta, pariatur? At quis corporis.</p> <p> dolorem reprehenderit delectus eius possimus laborum rerum doloremque inventore obcaecati ex illo minus earum corrupti! Itaque impedit ut optio provident iste architecto deleniti officiis sit quia corrupti, quisquam rerum nam. Possimus aliquam at nulla pariatur in incidunt autem cupiditate quasi perspiciatis, sint voluptates consequatur eum eligendi excepturi ut?.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla,',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla, eius molestiae reiciendis temporibus atque error.</p> Explicabo quaerat culpa fugit laudantium, voluptatibus. <p> illum aut, et quis doloribus nam beatae. Adipisci atque, consequuntur tenetur laudantium in tempore dolore saepe voluptas possimus. Soluta similique illo asperiores officiis, dolore hic recusandae obcaecati, itaque voluptates fugit minima molestiae totam cumque nihil quod. </p><p> ex aliquam optio, esse a deleniti modi commodi ratione voluptas fugiat. Fuga unde numquam quisquam obcaecati, minus voluptas harum molestias corrupti iure dignissimos? Soluta, pariatur? At quis corporis.</p> <p> dolorem reprehenderit delectus eius possimus laborum rerum doloremque inventore obcaecati ex illo minus earum corrupti! Itaque impedit ut optio provident iste architecto deleniti officiis sit quia corrupti, quisquam rerum nam. Possimus aliquam at nulla pariatur in incidunt autem cupiditate quasi perspiciatis, sint voluptates consequatur eum eligendi excepturi ut?.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla,',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsum, rerum, illum suscipit eligendi non nobis unde vero recusandae voluptate autem aliquam! Quisquam facilis iure nulla, eius molestiae reiciendis temporibus atque error.</p> Explicabo quaerat culpa fugit laudantium, voluptatibus. <p> illum aut, et quis doloribus nam beatae. Adipisci atque, consequuntur tenetur laudantium in tempore dolore saepe voluptas possimus. Soluta similique illo asperiores officiis, dolore hic recusandae obcaecati, itaque voluptates fugit minima molestiae totam cumque nihil quod. </p><p> ex aliquam optio, esse a deleniti modi commodi ratione voluptas fugiat. Fuga unde numquam quisquam obcaecati, minus voluptas harum molestias corrupti iure dignissimos? Soluta, pariatur? At quis corporis.</p> <p> dolorem reprehenderit delectus eius possimus laborum rerum doloremque inventore obcaecati ex illo minus earum corrupti! Itaque impedit ut optio provident iste architecto deleniti officiis sit quia corrupti, quisquam rerum nam. Possimus aliquam at nulla pariatur in incidunt autem cupiditate quasi perspiciatis, sint voluptates consequatur eum eligendi excepturi ut?.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
