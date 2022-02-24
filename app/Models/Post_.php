<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bayu Fajariyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam eos a dignissimos. Natus quasi veniam tenetur deserunt odit laborum minima ex similique excepturi odio corrupti, molestias nesciunt! Voluptatibus tempore voluptas consequuntur repudiandae quaerat, magni odio eveniet dicta voluptates distinctio sunt, pariatur aut repellendus fugiat dignissimos error voluptatem quos. Iure quod quae, aliquam cupiditate placeat, eum alias sapiente, necessitatibus dolores molestias minus porro! Amet similique sint vel earum magni quo architecto debitis. Perferendis vel quas soluta consectetur quis neque accusamus aperiam quia possimus. Deleniti facilis rerum dolores, tempora fugit obcaecati iure necessitatibus omnis, quasi inventore quia harum commodi beatae iusto doloribus."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bayu Fajariyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam eos a dignissimos. Natus quasi veniam tenetur deserunt odit laborum minima ex similique excepturi odio corrupti, molestias nesciunt! Voluptatibus tempore voluptas consequuntur repudiandae quaerat, magni odio eveniet dicta voluptates distinctio sunt, pariatur aut repellendus fugiat dignissimos error voluptatem quos. Iure quod quae, aliquam cupiditate placeat, eum alias sapiente, necessitatibus dolores molestias minus porro! Amet similique sint vel earum magni quo architecto debitis. Perferendis vel quas soluta consectetur quis neque accusamus aperiam quia possimus. Deleniti facilis rerum dolores, tempora fugit obcaecati iure necessitatibus omnis, quasi inventore quia harum commodi beatae iusto doloribus."
        ],
        [
            "title" => "Judul Posts Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Bayu Fajariyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam eos a dignissimos. Natus quasi veniam tenetur deserunt odit laborum minima ex similique excepturi odio corrupti, molestias nesciunt! Voluptatibus tempore voluptas consequuntur repudiandae quaerat, magni odio eveniet dicta voluptates distinctio sunt, pariatur aut repellendus fugiat dignissimos error voluptatem quos. Iure quod quae, aliquam cupiditate placeat, eum alias sapiente, necessitatibus dolores molestias minus porro! Amet similique sint vel earum magni quo architecto debitis. Perferendis vel quas soluta consectetur quis neque accusamus aperiam quia possimus. Deleniti facilis rerum dolores, tempora fugit obcaecati iure necessitatibus omnis, quasi inventore quia harum commodi beatae iusto doloribus."
        ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}