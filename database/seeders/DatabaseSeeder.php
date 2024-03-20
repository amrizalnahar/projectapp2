<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  User::create([
        //     'name' => 'Amrizal',
        //     'email' => 'zalamri26@gmail.com',
        //     'password' => bcrypt('123456')
        //  ]);
        //  User::create([
        //     'name' => 'Muhammad',
        //     'email' => 'muhamad@gmail.com',
        //     'password' => bcrypt('123456')
        //  ]);
        //  User::create([
        //     'name' => 'Monkey D. Luffy',
        //     'email' => 'luffy@gmail.com',
        //     'password' => bcrypt('123456')
        //  ]);

        User::factory(5)->create();
        Category::create([
            'jenis_kategori' => 'Wedding',
            'slug' => 'wedding'
        ]);
        Category::create([
            'jenis_kategori' => 'Pre Wedding',
            'slug' => 'pre-wedding'
        ]);
        Category::create([
            'jenis_kategori' => 'Wisuda Sekolah',
            'slug' => 'wisuda-sekolah'
        ]);
        Blog::factory(25)->create();

        //  Blog::create([
        //     'title' => 'Raksasa Teknologi Akan Merilis Smartphone Terbaru dengan Fitur AI Terdepan',
        //     'slug' => 'raksasa-teknologi-akan-merilis-smartphone-terbaru-dengan-fitur-ai-terdepan',
        //     'excerpt' => 'Berita ini mungkin membahas peluncuran smartphone terbaru dari perusahaan teknologi ternama',
        //     'deskripsi' => 'Berita ini mungkin membahas peluncuran smartphone terbaru dari perusahaan teknologi ternama, menyoroti fitur-fitur kecerdasan buatan (AI) yang membedakan perangkat tersebut. Mungkin mencakup inovasi dalam pengenalan suara, pengolahan gambar, atau aplikasi cerdas lainnya',
        //     'category_id' => 1,
        //     'user_id' => 1
        //  ]);

        //  Blog::create([
        //     'title' => 'Serangan Ransomware Mengguncang Perusahaan Besar, Permintaan Pembayaran Bitcoin',
        //     'slug' => 'serangan-ransomware-mengguncang-perusahaan-besar-permintaan-pembayaran-bitcoin',
        //     'excerpt' => ' Artikel ini kemungkinan membahas dampak serangan ransomware terbaru terhadap perusahaan besar',
        //     'deskripsi' => 'Artikel ini kemungkinan membahas dampak serangan ransomware terbaru terhadap perusahaan besar, menyajikan rincian serangan, dan menyoroti tren umum dalam dunia keamanan siber. Mungkin juga menyoroti konsep pembayaran ransom menggunakan mata uang digital seperti Bitcoin.',
        //     'category_id' => 1,
        //     'user_id' => 2
        //  ]);

        //  Blog::create([
        //     'title' => 'Peluncuran Teknologi 5G Membuka Pintu Baru untuk Inovasi IoT',
        //     'slug' => 'peluncuran-teknologi-5g-membuka-pintu-baru-untuk-inovasi-iot',
        //     'excerpt' => ' Berita ini dapat membahas dampak peluncuran jaringan 5G pada perkembangan Internet of Things (IoT)',
        //     'deskripsi' => 'Berita ini dapat membahas dampak peluncuran jaringan 5G pada perkembangan Internet of Things (IoT). Mungkin menyoroti kecepatan dan ketersediaan yang lebih tinggi dari jaringan 5G dan bagaimana ini membuka peluang baru untuk pengembangan dan penerapan perangkat IoT.',
        //     'category_id' => 2,
        //     'user_id' => 2
        //  ]);

        //  Blog::create([
        //     'title' => 'Sit amet consectetur adipisicing elit',
        //     'slug' => 'sit-amet-consectetur-adipisicing-elit',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque velit modi assumenda in quidem,',
        //     'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque velit modi assumenda in quidem, fugiat ex doloribus quae minus unde nam saepe eius enim iusto corrupti tempore alias eos cumque quam adipisci laboriosam qui numquam natus! Nulla labore sapiente mollitia voluptatem optio obcaecati aspernatur blanditiis laborum dicta, eius quaerat sunt vel ratione sed facilis corporis ipsa in repellat esse libero nihil cupiditate nostrum quam error? Cupiditate repudiandae tempore modi dolorem ullam, rem accusantium! Ducimus obcaecati cumque similique, ullam voluptas culpa quos. Dolore dolorem cumque iusto iste. Dicta fugiat iusto beatae assumenda dolore ut, nostrum iste doloribus, aperiam corrupti ratione est?',
        //     'category_id' => 3,
        //     'user_id' => 3
        //  ]);





    }
}
