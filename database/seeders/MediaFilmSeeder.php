<?php

namespace Database\Seeders;

use App\Models\MediaFilm;

use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'Bapak Saya Garena',
            'urlMedia' => 'https://www.dailysia.com/wp-content/uploads/2022/03/Dede-Inoen-min.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'Belajar Dulu Dek',
            'urlMedia' => 'https://i.ytimg.com/vi/YpT5Q6sXA9k/maxresdefault.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'PWK Citya',
            'urlMedia' => 'https://th.bing.com/th/id/OIP.EyvAKi48OwEPc07JD6BiKAHaEK?w=307&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'PWK Eca',
            'urlMedia' => 'https://www.youtube.com/embed/ffgLuwGIo20?si=pr8AFFFnzXKBYq93',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'PWK Tyo',
            'urlMedia' => 'https://www.youtube.com/embed/FY0hUkr2aZw?si=2fb2ozw1DVKSoNPF',
        ]);

        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'PWK Lolox',
            'urlMedia' => 'https://image.popmama.com/content-images/post/20240126/biodata%20profil%20dede%20inoen%205-NNvbCoA5LDvyVyJP5cfP2xcf4RvK0n8n.jpg?width=800&height=420',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'PWK Vino',
            'urlMedia' => 'https://kuyou.id/content/images/dede-20220323073000.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'PWK Nichol',
            'urlMedia' => 'https://www.youtube.com/watch?v=4NytqcGPrLE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'PWK Rigen',
            'urlMedia' => 'https://www.youtube.com/watch?v=M5AJoA7jioQ',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'PWK Rengga',
            'urlMedia' => 'https://www.youtube.com/watch?v=0qZ_dOO5gG4',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'Vindes Habib Jafar',
            'urlMedia' => 'https://th.bing.com/th/id/OIP.cuZbdlv6wq1PJKlEQptBQgHaDt?rs=1&pid=ImgDetMain',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'Vindes Eca Desta',
            'urlMedia' => 'https://media.suara.com/pictures/970x544/2022/03/22/35156-duh-dede-inoen-pemakan-raja-jin-buat-konten-ngumpet-di-kolong-rel-kereta.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'Raditya Dika Vior',
            'urlMedia' => 'https://www.youtube.com/watch?v=qKV-VkYYy8c',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'Vindes Andre',
            'urlMedia' => 'https://www.youtube.com/watch?v=M5AJoA7jioQ',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'Vindes Rigen',
            'urlMedia' => 'https://www.youtube.com/watch?v=S1U2nraXABw',
        ]);

    }
}
