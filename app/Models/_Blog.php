<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Blog
{
   private static $blog_posts = [
    [
        "title" => "Judul Pertama",
        "slug" => "judul-pertama",
        "deskripsi" => "lipsum dsasd adasdasd asdsad sa dasdsdsadsadad adsd adsadasdsadadasdsa d. lipsum dsasd adasdasd asdsad sa dasdsdsadsadad adsd adsadasdsadadasdsa d"
    ],
    [
        "title" => "Judul Kedua",
        "slug" => "judul-kedua",
        "deskripsi" => "Platea ultricies inceptos eros per egestas quis natoque posuere sit curae sapien. Himenaeos vestibulum faucibus fusce aptent ultrices sollicitudin pellentesque mattis. Pharetra dis pede malesuada tristique mollis tincidunt vitae magna netus. Aenean placerat nostra quis aliquam parturient. Mi praesent viverra nostra eget vivamus sed hac venenatis natoque. Platea quam accumsan metus hendrerit mattis. Augue egestas ullamcorper hendrerit quisque lorem nisl facilisi facilisis.

        Dictumst praesent tristique sem congue maecenas consequat donec vulputate. Libero a consectetuer hendrerit habitant placerat taciti. Augue suspendisse fusce inceptos velit porta mattis lectus vehicula quis. Erat id rutrum phasellus vivamus potenti laoreet et."
    ],
    [
        "title" => "Ditandatangani Atau Ditanda Tangani Kamus KBBI
        ",
        "slug" => "ditandatangani-atau-ditanda-tangani-kamus-kbbi",
        "deskripsi" => "lipsum dsasd adasdasd asdsad sa dasdsdsadsadad adsd adsadasdsadadasdsa d.lipsum dsasd adasdasd asdsad sa dasdsdsadsadad adsd adsadasdsadadasdsa d. lipsum dsasd adasdasd asdsad sa dasdsdsadsadad adsd adsadasdsadadasdsa d"
    ]
    ];

    public static function all(){
        // karena static maka diperlukan keyword "self", kalau property public menggunakna "$this->"
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
