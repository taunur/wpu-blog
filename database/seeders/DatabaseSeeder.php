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


        User::create([
            'name' => 'Taufik Nurrahman',
            'username' =>  'taunur',
            'email' => 'taufik.nurrahmanmaster980@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // User::create([
        //     'name' => 'Donal Trump',
        //     'email' => 'donal.trump@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores labore nemo nam numquam adipisci veritatis molestias eligendi sed modi quisquam ex non sint enim deleniti dignissimos voluptatem debitis, sit aperiam a possimus expedita quis incidunt.</p><p> Architecto earum commodi totam vel ipsum sed quisquam excepturi quas fugit, est omnis vitae quo. Eius reiciendis odit, aliquam corrupti doloribus sint distinctio, fugiat ut error quaerat nemo perferendis tempore fugit sunt totam dicta accusamus, enim quo repellendus reprehenderit adipisci ipsum! Dignissimos eos ea assumenda, fuga facilis consectetur delectus accusamus, ratione porro officia molestias totam accusantium magnam quisquam voluptatum harum! Iste, odit ut perspiciatis tempora, dicta, quo non quis voluptatibus corrupti dolor nemo.</p><p>Amet voluptates quibusdam, minima laudantium quae a doloribus enim unde tempore aut vero deserunt odio, qui distinctio hic porro doloremque dicta facilis! Fugit, eius quidem modi, dignissimos tempora eum aperiam optio a aliquid laboriosam iusto nihil minus necessitatibus asperiores amet quo?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores labore nemo nam numquam adipisci veritatis molestias eligendi sed modi quisquam ex non sint enim deleniti dignissimos voluptatem debitis, sit aperiam a possimus expedita quis incidunt.</p><p> Architecto earum commodi totam vel ipsum sed quisquam excepturi quas fugit, est omnis vitae quo. Eius reiciendis odit, aliquam corrupti doloribus sint distinctio, fugiat ut error quaerat nemo perferendis tempore fugit sunt totam dicta accusamus, enim quo repellendus reprehenderit adipisci ipsum! Dignissimos eos ea assumenda, fuga facilis consectetur delectus accusamus, ratione porro officia molestias totam accusantium magnam quisquam voluptatum harum! Iste, odit ut perspiciatis tempora, dicta, quo non quis voluptatibus corrupti dolor nemo.</p><p>Amet voluptates quibusdam, minima laudantium quae a doloribus enim unde tempore aut vero deserunt odio, qui distinctio hic porro doloremque dicta facilis! Fugit, eius quidem modi, dignissimos tempora eum aperiam optio a aliquid laboriosam iusto nihil minus necessitatibus asperiores amet quo?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores labore nemo nam numquam adipisci veritatis molestias eligendi sed modi quisquam ex non sint enim deleniti dignissimos voluptatem debitis, sit aperiam a possimus expedita quis incidunt.</p><p> Architecto earum commodi totam vel ipsum sed quisquam excepturi quas fugit, est omnis vitae quo. Eius reiciendis odit, aliquam corrupti doloribus sint distinctio, fugiat ut error quaerat nemo perferendis tempore fugit sunt totam dicta accusamus, enim quo repellendus reprehenderit adipisci ipsum! Dignissimos eos ea assumenda, fuga facilis consectetur delectus accusamus, ratione porro officia molestias totam accusantium magnam quisquam voluptatum harum! Iste, odit ut perspiciatis tempora, dicta, quo non quis voluptatibus corrupti dolor nemo.</p><p>Amet voluptates quibusdam, minima laudantium quae a doloribus enim unde tempore aut vero deserunt odio, qui distinctio hic porro doloremque dicta facilis! Fugit, eius quidem modi, dignissimos tempora eum aperiam optio a aliquid laboriosam iusto nihil minus necessitatibus asperiores amet quo?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores labore nemo nam numquam adipisci veritatis molestias eligendi sed modi quisquam ex non sint enim deleniti dignissimos voluptatem debitis, sit aperiam a possimus expedita quis incidunt.</p><p> Architecto earum commodi totam vel ipsum sed quisquam excepturi quas fugit, est omnis vitae quo. Eius reiciendis odit, aliquam corrupti doloribus sint distinctio, fugiat ut error quaerat nemo perferendis tempore fugit sunt totam dicta accusamus, enim quo repellendus reprehenderit adipisci ipsum! Dignissimos eos ea assumenda, fuga facilis consectetur delectus accusamus, ratione porro officia molestias totam accusantium magnam quisquam voluptatum harum! Iste, odit ut perspiciatis tempora, dicta, quo non quis voluptatibus corrupti dolor nemo.</p><p>Amet voluptates quibusdam, minima laudantium quae a doloribus enim unde tempore aut vero deserunt odio, qui distinctio hic porro doloremque dicta facilis! Fugit, eius quidem modi, dignissimos tempora eum aperiam optio a aliquid laboriosam iusto nihil minus necessitatibus asperiores amet quo?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
