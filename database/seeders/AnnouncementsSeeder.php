<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;
use Carbon\Carbon;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'title' => 'Ndërprerje e furnizimit me ujë në Zonën A',
                'content' => 'Ju njoftojmë se për shkak të punimeve të mirëmbajtjes, do të ketë ndërprerje të furnizimit me ujë në Zonën A të qytetit, më datë 10 Maj 2025, nga ora 09:00 deri në 14:00.',
                'published_at' => Carbon::now(),
            ],
            [
                'title' => 'Pastrimi i rezervuarëve',
                'content' => 'Në kuadër të mirëmbajtjes së rregullt, do të kryhet pastrimi i rezervuarëve kryesorë të ujit. Gjatë kësaj periudhe mund të ketë rënie të presionit të ujit në disa zona.',
                'published_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'Faturimi i muajit Prill',
                'content' => 'Ju njoftojmë se kanë filluar shpërndarjet e faturave të ujit për muajin Prill. Klientët mund të paguajnë faturat deri më datë 20 Maj pa penalitete.',
                'published_at' => Carbon::now()->subDays(5),
            ],
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}
