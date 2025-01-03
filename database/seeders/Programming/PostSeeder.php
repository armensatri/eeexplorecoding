<?php

namespace Database\Seeders\Programming;

use Illuminate\Database\Seeder;
use App\Models\Programming\Post;

class PrgpostSeeder extends Seeder
{
  public function run(): void
  {
    $posts = [
      [
        'playlist_id' => 1,
        'sp' => 1,
        'title' => 'Memulai Explorecoding',
        'slug' => 'memulai-explorecoding',
        'excerpt' => '
          welcome back guys !!
            ini adalah flatform belajar online programming yang bernama
            explorecoding, nama flatform ini terinspirasi dari pesatnya perkambangan teknologi web, android, desktop, artificial intelligence dan masih banyak lagi.
        ',
        'content' => '
          welcome back guys !!
            ini adalah flatform belajar online programming yang bernama
            explorecoding, nama flatform ini terinspirasi dari pesatnya perkambangan teknologi web, android, desktop, artificial intelligence dan masih banyak lagi.
          history exlporecoding
            pada awal mula nya saya hanya belajar bikin blog artikel biasa menggunakan html, css, js, dan framework laravel, namanya juga belajarkan yang biasa biasa aja dulu.

            entah kenapa seiring berjalannya waktu saya kepikiran "apa yang di pelajari di catat dan di upload ke blog posts agar tidak lupa dan bisa di pelajari kembali" maka terciptalah blog atau flatform yang nama explorecoding yang artinya menjelajahi dan mempelajari hal teknologi programming yang sangat berkembang pesat saat ini

          materi pembelajaran
            saya akan membuat pembelajarann online dari dasar sampaaaaaaaaaaaaaaii ntah ndak tau. yang di pelajari di sini seperti paths frontend, backend, android, web, desktop, dan berbagai macam path, roadmap, playlist dan studi kasus projectnya langsung. explore aja dulu dan jangan lupa pantau update dan tambahan materi yang akan mendatang.

            setiap materi akan ada update dan jangan kaget "lah kok berubah" mungkin kelupaan atau ada yang kurang atau typo lah dan lain lain lah dah lah hahaha

            materi ini saya buat sedetail mungkin dan sederhana agar mudah di pelajar bagi para programmer atau yang mau memasuki dunia teknologi programming, dan tidak ada batasan umur, mau yang tua yang mudah sikat saja guys hahaha.

          kapan waktu belajar
            waktu belajar fleksibel dan terserah anda kapan mau belajar, jika anda mengalami kesulitan dalam materi yuk berdiskusi di kolom komentar

          LAGI LOGIN SEKARANG DAN AKSES MATERI BELAJAR EXPLORECODING
        ',
        'status_id' => 1
      ]
    ];

    foreach ($posts as $post) {
      Post::create($post);
    }
  }
}
