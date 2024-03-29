<?php

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
        // $this->call(UserSeeder::class);
        factory(App\Article::class, 20)->create();
        factory(App\Category::class, 5)->create();
        factory(App\Comment::class, 40)->create();
        factory(App\Nice::class, 10)->create();

        factory(App\User::class)->create([
        "name" => "Alice",
        "email" => "alice@gmail.com",
        ]);
        
        factory(App\User::class)->create([
        "name" => "Bob",
        "email" => "bob@gmail.com",
        ]);
    }
}
