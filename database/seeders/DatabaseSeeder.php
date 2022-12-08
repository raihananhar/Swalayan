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
        

        User::Create([
            'name' => 'Agung Septiana',
            'username' => 'agungSeptiana',
            'email' => '203040102@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        // User::Create([
        //     'name' => 'Yudha Permana',
        //     'email' => '203040101@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::Create([
            'name' => 'Actions',
            'slug' => 'actions'
        ]);
        
        Category::Create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::Create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Post::factory(20)->create();

        // Post::Create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quam harum omnis maxime fugiat natus dicta! Vel aliquam voluptatibus, animi assumenda accusantium magnam nesciunt? Explicabo sapiente suscipit incidunt quisquam expedita?',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem dolor ex tempore officia at ab. Tenetur eaque at corrupti odit? Nobis ratione, iste quaerat aspernatur ea nam in rerum nulla reiciendis ut aperiam odio quod ducimus similique iure sequi aliquam adipisci placeat at hic eaque.</p><p> Praesentium sunt odio placeat earum. Soluta impedit eligendi, assumenda sequi consectetur est consequuntur illum eum nobis voluptas amet natus.</p><p> Aliquid sed, facilis eaque architecto et repellendus quisquam ab possimus assumenda laborum explicabo officia perferendis itaque. Perspiciatis voluptate corrupti eveniet similique reprehenderit quod expedita facilis excepturi! Quam delectus repudiandae magni blanditiis maiores consequatur, ab corporis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::Create([
        //     'title' => 'Judul ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quam harum omnis maxime fugiat natus dicta! Vel aliquam voluptatibus, animi assumenda accusantium magnam nesciunt? Explicabo sapiente suscipit incidunt quisquam expedita?',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem dolor ex tempore officia at ab. Tenetur eaque at corrupti odit? Nobis ratione, iste quaerat aspernatur ea nam in rerum nulla reiciendis ut aperiam odio quod ducimus similique iure sequi aliquam adipisci placeat at hic eaque.</p><p> Praesentium sunt odio placeat earum. Soluta impedit eligendi, assumenda sequi consectetur est consequuntur illum eum nobis voluptas amet natus.</p><p> Aliquid sed, facilis eaque architecto et repellendus quisquam ab possimus assumenda laborum explicabo officia perferendis itaque. Perspiciatis voluptate corrupti eveniet similique reprehenderit quod expedita facilis excepturi! Quam delectus repudiandae magni blanditiis maiores consequatur, ab corporis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::Create([
        //     'title' => 'Judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quam harum omnis maxime fugiat natus dicta! Vel aliquam voluptatibus, animi assumenda accusantium magnam nesciunt? Explicabo sapiente suscipit incidunt quisquam expedita?',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem dolor ex tempore officia at ab. Tenetur eaque at corrupti odit? Nobis ratione, iste quaerat aspernatur ea nam in rerum nulla reiciendis ut aperiam odio quod ducimus similique iure sequi aliquam adipisci placeat at hic eaque.</p><p> Praesentium sunt odio placeat earum. Soluta impedit eligendi, assumenda sequi consectetur est consequuntur illum eum nobis voluptas amet natus.</p><p> Aliquid sed, facilis eaque architecto et repellendus quisquam ab possimus assumenda laborum explicabo officia perferendis itaque. Perspiciatis voluptate corrupti eveniet similique reprehenderit quod expedita facilis excepturi! Quam delectus repudiandae magni blanditiis maiores consequatur, ab corporis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::Create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quam harum omnis maxime fugiat natus dicta! Vel aliquam voluptatibus, animi assumenda accusantium magnam nesciunt? Explicabo sapiente suscipit incidunt quisquam expedita?',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem dolor ex tempore officia at ab. Tenetur eaque at corrupti odit? Nobis ratione, iste quaerat aspernatur ea nam in rerum nulla reiciendis ut aperiam odio quod ducimus similique iure sequi aliquam adipisci placeat at hic eaque.</p><p> Praesentium sunt odio placeat earum. Soluta impedit eligendi, assumenda sequi consectetur est consequuntur illum eum nobis voluptas amet natus.</p><p> Aliquid sed, facilis eaque architecto et repellendus quisquam ab possimus assumenda laborum explicabo officia perferendis itaque. Perspiciatis voluptate corrupti eveniet similique reprehenderit quod expedita facilis excepturi! Quam delectus repudiandae magni blanditiis maiores consequatur, ab corporis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
