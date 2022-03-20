<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adika",
        "email" => "adikaahmad@gmail.com",
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
