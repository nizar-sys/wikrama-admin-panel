<?php

namespace Database\Seeders;

use App\Models\VirtualWikrama as ModelsVirtualWikrama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VirtualWikrama extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $virtu = [
            [
                'ecommerce' => 'https://ecommerce.wikrama.id',
                'elearning' => 'https://elearning.wikrama.id',
                'mini_movie' => 'https://mini-movie.wikrama.id',
                'live_meeting' => 'https://live-mmeting.wikrama.id',
                'perpus' => 'https://perpus.wikrama.id',
            ],
        ];

        ModelsVirtualWikrama::insert($virtu);
    }
}
