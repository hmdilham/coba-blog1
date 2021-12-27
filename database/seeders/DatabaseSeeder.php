<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Penulis Pertama',
            'email' => 'user1@gmail.com',
            'username' => 'user1',
            'password' => bcrypt('12345'),
        ]);

        // User::create([
        //     'name' => 'Penulis Kedua',
        //     'email' => 'kedua@mail.dev',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Post::factory(31)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo beatae ipsam ex, nihil, praesentium debitis animi molestiae officiis esse quod? Temporibus sed magni amet quae aperiam voluptate.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae numquam similique, quod maxime illo laudantium soluta, accusantium molestiae at pariatur tenetur officiis veritatis ducimus sunt a assumenda aperiam odio, omnis necessitatibus minus rerum nostrum iusto neque quis! Possimus molestiae quae deleniti a vel, repudiandae fugiat iusto velit veniam ipsam quo explicabo dolor id nesciunt deserunt vero, dolores obcaecati optio adipisci. Veritatis corporis sint et dolores repudiandae excepturi sapiente eum, suscipit consectetur hic voluptatibus cupiditate pariatur quidem blanditiis consequatur deleniti dolor omnis ipsa corrupti ab. Dicta doloribus ipsum vitae, quam, ab sunt quos voluptates culpa molestiae enim accusantium ducimus dolor nobis quidem exercitationem perferendis sint. Tempore, maiores dolorum ipsum laborum vero quibusdam nobis ea sed pariatur ipsam error praesentium maxime vitae!</p><p>Nisi nemo, provident quia, sed optio perferendis, vitae expedita eos ut incidunt quaerat blanditiis nesciunt officia. Quaerat repellat cum optio ea placeat? Dolor hic corrupti aperiam, laboriosam placeat dolore consectetur deserunt! Inventore eaque aspernatur facilis doloremque molestias sapiente illo quas molestiae autem, error iusto deserunt deleniti perspiciatis blanditiis quia, voluptas beatae obcaecati dolore, eveniet quasi maxime. Explicabo, aperiam molestiae itaque dolor optio accusantium error, unde reprehenderit maxime quidem ad, animi a iste? Reiciendis, cumque. A eveniet saepe modi voluptatem dignissimos earum, accusantium inventore totam explicabo cupiditate esse, quae vel nihil omnis animi magni ea. Similique maxime eveniet non officiis delectus nesciunt aliquam quia cupiditate id, esse dolor animi rerum molestiae temporibus, doloribus a ipsa consequuntur nulla blanditiis quibusdam! Culpa, nulla?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo beatae ipsam ex, nihil, praesentium debitis animi molestiae officiis esse quod? Temporibus sed magni amet quae aperiam voluptate.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae numquam similique, quod maxime illo laudantium soluta, accusantium molestiae at pariatur tenetur officiis veritatis ducimus sunt a assumenda aperiam odio, omnis necessitatibus minus rerum nostrum iusto neque quis! Possimus molestiae quae deleniti a vel, repudiandae fugiat iusto velit veniam ipsam quo explicabo dolor id nesciunt deserunt vero, dolores obcaecati optio adipisci. Veritatis corporis sint et dolores repudiandae excepturi sapiente eum, suscipit consectetur hic voluptatibus cupiditate pariatur quidem blanditiis consequatur deleniti dolor omnis ipsa corrupti ab. Dicta doloribus ipsum vitae, quam, ab sunt quos voluptates culpa molestiae enim accusantium ducimus dolor nobis quidem exercitationem perferendis sint. Tempore, maiores dolorum ipsum laborum vero quibusdam nobis ea sed pariatur ipsam error praesentium maxime vitae!</p><p>Nisi nemo, provident quia, sed optio perferendis, vitae expedita eos ut incidunt quaerat blanditiis nesciunt officia. Quaerat repellat cum optio ea placeat? Dolor hic corrupti aperiam, laboriosam placeat dolore consectetur deserunt! Inventore eaque aspernatur facilis doloremque molestias sapiente illo quas molestiae autem, error iusto deserunt deleniti perspiciatis blanditiis quia, voluptas beatae obcaecati dolore, eveniet quasi maxime. Explicabo, aperiam molestiae itaque dolor optio accusantium error, unde reprehenderit maxime quidem ad, animi a iste? Reiciendis, cumque. A eveniet saepe modi voluptatem dignissimos earum, accusantium inventore totam explicabo cupiditate esse, quae vel nihil omnis animi magni ea. Similique maxime eveniet non officiis delectus nesciunt aliquam quia cupiditate id, esse dolor animi rerum molestiae temporibus, doloribus a ipsa consequuntur nulla blanditiis quibusdam! Culpa, nulla?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo beatae ipsam ex, nihil, praesentium debitis animi molestiae officiis esse quod? Temporibus sed magni amet quae aperiam voluptate.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae numquam similique, quod maxime illo laudantium soluta, accusantium molestiae at pariatur tenetur officiis veritatis ducimus sunt a assumenda aperiam odio, omnis necessitatibus minus rerum nostrum iusto neque quis! Possimus molestiae quae deleniti a vel, repudiandae fugiat iusto velit veniam ipsam quo explicabo dolor id nesciunt deserunt vero, dolores obcaecati optio adipisci. Veritatis corporis sint et dolores repudiandae excepturi sapiente eum, suscipit consectetur hic voluptatibus cupiditate pariatur quidem blanditiis consequatur deleniti dolor omnis ipsa corrupti ab. Dicta doloribus ipsum vitae, quam, ab sunt quos voluptates culpa molestiae enim accusantium ducimus dolor nobis quidem exercitationem perferendis sint. Tempore, maiores dolorum ipsum laborum vero quibusdam nobis ea sed pariatur ipsam error praesentium maxime vitae!</p><p>Nisi nemo, provident quia, sed optio perferendis, vitae expedita eos ut incidunt quaerat blanditiis nesciunt officia. Quaerat repellat cum optio ea placeat? Dolor hic corrupti aperiam, laboriosam placeat dolore consectetur deserunt! Inventore eaque aspernatur facilis doloremque molestias sapiente illo quas molestiae autem, error iusto deserunt deleniti perspiciatis blanditiis quia, voluptas beatae obcaecati dolore, eveniet quasi maxime. Explicabo, aperiam molestiae itaque dolor optio accusantium error, unde reprehenderit maxime quidem ad, animi a iste? Reiciendis, cumque. A eveniet saepe modi voluptatem dignissimos earum, accusantium inventore totam explicabo cupiditate esse, quae vel nihil omnis animi magni ea. Similique maxime eveniet non officiis delectus nesciunt aliquam quia cupiditate id, esse dolor animi rerum molestiae temporibus, doloribus a ipsa consequuntur nulla blanditiis quibusdam! Culpa, nulla?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo beatae ipsam ex, nihil, praesentium debitis animi molestiae officiis esse quod? Temporibus sed magni amet quae aperiam voluptate.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae numquam similique, quod maxime illo laudantium soluta, accusantium molestiae at pariatur tenetur officiis veritatis ducimus sunt a assumenda aperiam odio, omnis necessitatibus minus rerum nostrum iusto neque quis! Possimus molestiae quae deleniti a vel, repudiandae fugiat iusto velit veniam ipsam quo explicabo dolor id nesciunt deserunt vero, dolores obcaecati optio adipisci. Veritatis corporis sint et dolores repudiandae excepturi sapiente eum, suscipit consectetur hic voluptatibus cupiditate pariatur quidem blanditiis consequatur deleniti dolor omnis ipsa corrupti ab. Dicta doloribus ipsum vitae, quam, ab sunt quos voluptates culpa molestiae enim accusantium ducimus dolor nobis quidem exercitationem perferendis sint. Tempore, maiores dolorum ipsum laborum vero quibusdam nobis ea sed pariatur ipsam error praesentium maxime vitae!</p><p>Nisi nemo, provident quia, sed optio perferendis, vitae expedita eos ut incidunt quaerat blanditiis nesciunt officia. Quaerat repellat cum optio ea placeat? Dolor hic corrupti aperiam, laboriosam placeat dolore consectetur deserunt! Inventore eaque aspernatur facilis doloremque molestias sapiente illo quas molestiae autem, error iusto deserunt deleniti perspiciatis blanditiis quia, voluptas beatae obcaecati dolore, eveniet quasi maxime. Explicabo, aperiam molestiae itaque dolor optio accusantium error, unde reprehenderit maxime quidem ad, animi a iste? Reiciendis, cumque. A eveniet saepe modi voluptatem dignissimos earum, accusantium inventore totam explicabo cupiditate esse, quae vel nihil omnis animi magni ea. Similique maxime eveniet non officiis delectus nesciunt aliquam quia cupiditate id, esse dolor animi rerum molestiae temporibus, doloribus a ipsa consequuntur nulla blanditiis quibusdam! Culpa, nulla?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
