<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Artikel;
use App\Models\Turnamen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends',
        ]);

        Game::create([
            'name' => 'Free Fire',
            'slug' => 'free-fire',
        ]);

        Game::create([
            'name' => 'Call Of Duty Mobile',
            'slug' => 'call-of-duty-mobile',
        ]);

        Artikel::factory(10)->create();

        // Artikel::create([
        //     'title' => 'RRQ JUARA MPL SEASON 4',
        //     'game_id' => 1,
        //     'slug' => 'champion-mpl-season-4',
        //     'excerpt' => 'rrq juara 1 menang melawan onic',
        //     'body' => 'membawa Anda ke dalam pertempuran epik dan ketegangan yang mendalam. Ini adalah kesempatan bagi 
        //             para pemain berani dan pemberani untuk bersaing dalam arena yang memukau',
        //     'published_at' => '2023-11-30'
        // ]);

        Turnamen::create([
            'tournament_name' => 'FRITTO E-SPORT MOBILE LEGENDS TOURNAMENT',
            'entry_fee' => '100000',
            'prize_pool' => '2000000',
            'slots_available' => 32,
            'slots_occupied' => 18,
            'jadwal_mulai' => '2023-11-1',
            'jadwal_selesai' => '2023-11-7',
            'organizer' => 'FRITTO CHICKEN',
            'description' => '<p>Selamat datang di Tournament of Champions - Season 3! Ini adalah turnamen game 
                            yang akan menguji kemampuan para pemain terbaik dalam komunitas game kita. 
                            Turnamen ini akan menampilkan aksi kompetitif yang seru, persaingan sengit, 
                            dan hadiah-hadiah menarik.<p>
                            <p>Detail Turnamen:</p>
                            <ul>
                            <li>Tanggal: 2023-11-1</li>
                            <li>Lokasi: Offline</li>
                            <li>Format: Tim vs Tim</li>
                            <li>Game: Mobile Legends </li>
                            </ul>',
            'slug' => 'fritto-e-sport-mobile-legends-tournament'
        ]); 


        Turnamen::create([
            'tournament_name' => 'STREAM GAMING X ESHARK TOKEN SPECIAL EVENT',
            'entry_fee' => '200000',
            'prize_pool' => '5000000',
            'slots_available' => 64,
            'slots_occupied' => 50,
            'jadwal_mulai' => '2023-11-7',
            'jadwal_selesai' => '2023-11-14',
            'organizer' => 'ESHARK TOKEN',
            'description' => '<p>Sambutlah  ESHARK TOKEN SPECIAL EVENT, sebuah turnamen game yang akan 
                            membawa Anda ke dalam pertempuran epik dan ketegangan yang mendalam. Ini adalah kesempatan bagi 
                            para pemain berani dan pemberani untuk bersaing dalam arena yang memukau, 
                            di mana hanya yang terkuat yang akan bertahan.</p>
                            <p>Detail Turnamen:</p>
                            <ul>
                            <li>Tanggal: 2023-11-7</li>
                            <li>Lokasi: Online</li>
                            <li>Format: Tim vs Tim</li>
                            <li>Game: Mobile Legends </li>
                            </ul>',
            'slug' => 'eshark-token-tournament-spesial-crismas-mobile-legend'
        ]);

        Turnamen::create([
            'tournament_name' => 'TOP CLANS DOTA 2 INDONESIA REGIONAL QUALIFIER',
            'entry_fee' => '150000',
            'prize_pool' => '4000000',
            'slots_available' => 32,
            'slots_occupied' => 16,
            'jadwal_mulai' => '2023-11-28',
            'jadwal_selesai' => '2023-12-5',
            'organizer' => 'AKRONYM GAME',
            'description' => '<p>Bergabunglah dalam festival aksi esports Dota 2 yang menggetarkan hati di Indonesia, 
                            di mana tim-tim terbaik dari seluruh negeri akan bersaing untuk mendapatkan gelar juara dan memperebutkan 
                            tiket bergengsi ke turnamen nasional. Top Clans Dota 2 Indonesia Regional Qualifier adalah panggung utama 
                            di mana bakat-bakat paling cemerlang dalam dunia Dota 2 akan dipertontonkan.</p>
                            <p>Detail Turnamen:</p>
                            <ul>
                            <li>Tanggal: 2023-11-28</li>
                            <li>Lokasi: Online</li>
                            <li>Format: Tim vs Tim</li>
                            <li>Game: DOTA 2 </li>
                            </ul>',
            'slug' => 'top-clans-dota-2-indonesia-regional-qualifier'
        ]);
    }
}
