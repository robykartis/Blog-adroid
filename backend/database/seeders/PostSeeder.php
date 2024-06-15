<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, expedita. Dignissimos inventore aspernatur consequuntur cum cupiditate qui repellendus ut et dolor voluptatum quam nostrum, quaerat harum eligendi eius ipsa perferendis molestias maiores. Modi placeat repudiandae facilis tempora blanditiis dolorum deleniti, omnis dolores hic, amet nisi magni consequuntur harum ex? Pariatur obcaecati maxime aliquam debitis velit iste nostrum exercitationem architecto libero eaque tempora, molestias dolorum soluta ipsa sapiente blanditiis ex, corrupti sequi a consequatur ut ea eum provident! Numquam impedit, deserunt totam ad tempore velit temporibus voluptates recusandae officia nam ipsam iure assumenda atque, id, a aut dolore officiis doloremque itaque. Repellendus similique voluptates, autem maiores atque quibusdam minima placeat repudiandae quo nam repellat tempore in cumque doloremque beatae, fuga quam possimus animi recusandae molestias? Beatae enim dolor, laudantium maxime doloribus fugiat nobis neque animi adipisci culpa quas impedit aperiam molestias rem quia dolorum expedita necessitatibus repellendus modi. Quibusdam expedita et error repellat sequi consequuntur, rem nemo, cumque deleniti minus quam, nisi nihil placeat veniam adipisci. Quisquam cupiditate modi eveniet cumque magnam ipsum aperiam deserunt asperiores inventore aut, alias labore quaerat ducimus reiciendis explicabo, ratione illum optio numquam dolor quas neque ullam doloremque! Eos obcaecati eius deleniti doloribus nobis, et architecto, consequuntur minima culpa ducimus fugit, iste facilis laudantium impedit voluptas quos corporis! Porro quas facilis fuga aliquid in rem impedit asperiores debitis non deleniti nobis voluptatum assumenda saepe numquam esse, voluptate illum animi minima, quis ad pariatur eius! Blanditiis, ipsa expedita! Excepturi, voluptatem officia? A exercitationem rerum repellat similique assumenda tempora tenetur ab aperiam, animi iure minima debitis. Iusto accusantium voluptate quae harum voluptatibus veritatis impedit repellendus consequuntur quam deserunt nesciunt eum voluptatem iste modi unde ad dolore alias nobis pariatur omnis tempora eveniet, laboriosam non! Sunt, earum in. Debitis iusto dolorem magni veniam vel repellat corporis molestiae omnis eligendi.',
            'category_id' => 1,
            'is_published' => true,
        ]);
        Post::create([
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'body' => 'This is my second post!',
            'category_id' => 2,
            'is_published' => true,
        ]);
        Post::create([
            'title' => 'My Third Post',
            'slug' => 'my-third-post',
            'body' => 'This is my third post!',
            'category_id' => 3,
            'is_published' => false,
        ]);
    }
}
