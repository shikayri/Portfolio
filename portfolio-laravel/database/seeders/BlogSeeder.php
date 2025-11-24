<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'My First Blog Post',
            'content' => 'This is my first blog post. Welcome to my portfolio blog where I share my thoughts on technology, development tips, and personal experiences.',
            'image' => null,
        ]);

        Blog::create([
            'title' => 'Learning Laravel',
            'content' => 'Laravel is a powerful PHP framework. In this post, I discuss my journey learning Laravel and how it has improved my web development skills.',
            'image' => null,
        ]);

        Blog::create([
            'title' => 'React JS Adventures',
            'content' => 'React JS has been a game-changer for frontend development. Here, I share some tips and tricks I\'ve learned while working with React.',
            'image' => null,
        ]);
    }
}
