<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Furnizim me ujë të pijshëm',
                'description' => 'Furnizim i rregullt i qytetarëve me ujë të pijshëm të cilësisë së lartë dhe të sigurt për shëndetin.',
                'icon' => 'fa-tint',
            ],
            [
                'title' => 'Mirëmbajtje e rrjetit',
                'description' => 'Shërbime të mirëmbajtjes së rrjetit të ujësjellësit për të garantuar funksionim optimal.',
                'icon' => 'fa-tools',
            ],
            [
                'title' => 'Lidhje të reja',
                'description' => 'Realizimi i lidhjeve të reja në rrjetin e ujësjellësit për banesa dhe biznese.',
                'icon' => 'fa-plug',
            ],
            [
                'title' => 'Analiza laboratorike',
                'description' => 'Kryerja e analizave laboratorike për të siguruar cilësinë e lartë të ujit.',
                'icon' => 'fa-flask',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
