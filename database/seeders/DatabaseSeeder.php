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
        // User::create([
        //     'name' => 'Bayu Fajariyanto',
        //     'email' => 'bayuf08@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        
        // User::create([
        //     'name' => 'Ahmad Muchlish Tri Cahyo',
        //     'email' => 'cahyo@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in, nemo ducimus veritatis nostrum iste optio excepturi, possimus deleniti alias tempora exercitationem eius explicabo! Aliquid quos ducimus odio pariatur excepturi odit. Laudantium cum impedit sed dolor veritatis. Corporis aut enim harum placeat veniam reprehenderit cumque quidem eveniet sunt aliquid pariatur nam quisquam facere exercitationem eligendi laudantium, laborum fuga! Nobis repellendus ad, alias quas quae et molestiae delectus facilis qui porro. Reiciendis deleniti recusandae molestias iusto minima nostrum, expedita, accusamus fugit voluptate numquam nobis, qui minus. Iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in, nemo ducimus veritatis nostrum iste optio excepturi, possimus deleniti alias tempora exercitationem eius explicabo! Aliquid quos ducimus odio pariatur excepturi odit. Laudantium cum impedit sed dolor veritatis. Corporis aut enim harum placeat veniam reprehenderit cumque quidem eveniet sunt aliquid pariatur nam quisquam facere exercitationem eligendi laudantium, laborum fuga! Nobis repellendus ad, alias quas quae et molestiae delectus facilis qui porro. Reiciendis deleniti recusandae molestias iusto minima nostrum, expedita, accusamus fugit voluptate numquam nobis, qui minus. Iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in, nemo ducimus veritatis nostrum iste optio excepturi, possimus deleniti alias tempora exercitationem eius explicabo! Aliquid quos ducimus odio pariatur excepturi odit. Laudantium cum impedit sed dolor veritatis. Corporis aut enim harum placeat veniam reprehenderit cumque quidem eveniet sunt aliquid pariatur nam quisquam facere exercitationem eligendi laudantium, laborum fuga! Nobis repellendus ad, alias quas quae et molestiae delectus facilis qui porro. Reiciendis deleniti recusandae molestias iusto minima nostrum, expedita, accusamus fugit voluptate numquam nobis, qui minus. Iste.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis quas iusto accusantium esse. Obcaecati necessitatibus numquam nobis facere aliquam minima labore officiis in, nemo ducimus veritatis nostrum iste optio excepturi, possimus deleniti alias tempora exercitationem eius explicabo! Aliquid quos ducimus odio pariatur excepturi odit. Laudantium cum impedit sed dolor veritatis. Corporis aut enim harum placeat veniam reprehenderit cumque quidem eveniet sunt aliquid pariatur nam quisquam facere exercitationem eligendi laudantium, laborum fuga! Nobis repellendus ad, alias quas quae et molestiae delectus facilis qui porro. Reiciendis deleniti recusandae molestias iusto minima nostrum, expedita, accusamus fugit voluptate numquam nobis, qui minus. Iste.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
