<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, accusamus. Commodi nihil omnis obcaecati! Eum amet a suscipit quasi doloribus harum quisquam quibusdam maiores magni odio culpa, dolores rerum ea accusantium sit non adipisci quis provident accusamus aliquam laborum facilis repellat. Fuga omnis cum optio veniam minima sed quis facere, excepturi sapiente possimus! Quo magnam temporibus repudiandae facere ab autem asperiores laboriosam officia dolores, maiores obcaecati repellat reiciendis vitae! Sunt ratione nobis repudiandae ducimus necessitatibus exercitationem neque omnis, saepe assumenda?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa reprehenderit ab hic blanditiis facere assumenda voluptates numquam autem neque reiciendis, minima nesciunt omnis officiis. Vel nobis quas dolore deserunt earum nam cum ex quaerat, incidunt iste quos adipisci in fuga animi voluptatem nulla ea culpa cumque quia maiores nemo, vitae sequi! Eligendi distinctio ullam est, sequi ab dignissimos eveniet ipsam veniam fuga! Reprehenderit provident tempore deserunt velit repudiandae, quis soluta? Totam veritatis, id voluptatum at debitis odit dolorum doloribus molestias vel, fugit aliquid sunt aliquam provident maxime nobis iste nostrum illo est autem beatae et ad harum fuga quod. Culpa?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        // Kalau datanya Static seperti tulisan di atas pakai self, 
        // jika properti biasa pakai this
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
