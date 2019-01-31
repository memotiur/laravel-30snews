<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
                'name' => "Motiur",
                'username' => "memotiur",
                'phone' => "01717849968",
                'email' => "memotiur@gmail.com",
                'usertype' => "Admin",
                'profile_pic' => 'user.jpg',
                'password' => Hash::make('123456'),
            ]
        );

       /* \App\Category::create([
            'category_name' => "Business",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Politics",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Technology",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Sports",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Entertainment",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "International",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Science",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "Travel",
            'category_image' => "default.jpg"
        ]);*/


        \App\Category::create([
            'category_name' => "বাংলাদেশ",
            'category_image' => "default.jpg"
        ]);

        \App\Category::create([
            'category_name' => "টেকনোলজি",
            'category_image' => "default.jpg"
        ]);

        \App\Category::create([
            'category_name' => "সারা বিশ্ব",
            'category_image' => "default.jpg"
        ]);

        \App\Category::create([
            'category_name' => "লাইফস্টাইল",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "বিনোদন",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "ব্যবসা",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "খেলাধুলা",
            'category_image' => "default.jpg"
        ]);
        \App\Category::create([
            'category_name' => "রাজনীতি",
            'category_image' => "default.jpg"
        ]);
    }
}
