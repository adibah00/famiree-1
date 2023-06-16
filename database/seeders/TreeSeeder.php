<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $root = Post::create(['client_case' => 'Root']);

        $child1 = $root->children()->create(['client_case' => 'Child 1']);
        $child2 = $root->children()->create(['client_case' => 'Child 2']);

        $child1->children()->create(['client_case' => 'Grandchild 1']);
        $child2->children()->create(['client_case' => 'Grandchild 2']);
    }
}
