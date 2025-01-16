<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation;
use App\Models\User;

class ConsultationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch user IDs
        $users = User::pluck('id')->toArray();

        // Sample consultation data
        $consultations = [
            [
                'user_id' => $users[0],
                'tujuan_aduan' => 'Family Dispute',
                'keterangan_aduan' => 'Dispute resolution between husband and wife.',
                'tarikh_konsultasi' => '2025-01-20',
                'paid_pilihan' => 'PAID Kuantan',
                'kounselor_pilihan' => 'Lelaki',
            ],
            [
                'user_id' => $users[1],
                'tujuan_aduan' => 'Financial Issue',
                'keterangan_aduan' => 'Seeking advice on financial management in marriage.',
                'tarikh_konsultasi' => '2025-01-25',
                'paid_pilihan' => 'PAID Pekan',
                'kounselor_pilihan' => 'Perempuan',
            ],
            [
                'user_id' => $users[2],
                'tujuan_aduan' => 'Child Custody',
                'keterangan_aduan' => 'Dispute over child custody arrangements.',
                'tarikh_konsultasi' => '2025-01-22',
                'paid_pilihan' => 'PAID Kuantan',
                'kounselor_pilihan' => 'Lelaki',
            ],
            [
                'user_id' => $users[3],
                'tujuan_aduan' => 'Marriage Registration Issue',
                'keterangan_aduan' => 'Assistance with marriage registration complications.',
                'tarikh_konsultasi' => '2025-01-27',
                'paid_pilihan' => 'PAID Pekan',
                'kounselor_pilihan' => 'Perempuan',
            ],
            [
                'user_id' => $users[4],
                'tujuan_aduan' => 'Communication Problems',
                'keterangan_aduan' => 'Help with communication issues in marriage.',
                'tarikh_konsultasi' => '2025-01-30',
                'paid_pilihan' => 'PAID Kuantan',
                'kounselor_pilihan' => 'Lelaki',
            ],
            [
                'user_id' => $users[5],
                'tujuan_aduan' => 'Counseling for Divorce',
                'keterangan_aduan' => 'Seeking counseling before initiating divorce.',
                'tarikh_konsultasi' => '2025-02-01',
                'paid_pilihan' => 'PAID Pekan',
                'kounselor_pilihan' => 'Perempuan',
            ],
            [
                'user_id' => $users[0],
                'tujuan_aduan' => 'Stress Management',
                'keterangan_aduan' => 'Seeking advice on managing marital stress.',
                'tarikh_konsultasi' => '2025-02-03',
                'paid_pilihan' => 'PAID Kuantan',
                'kounselor_pilihan' => 'Lelaki',
            ],
            [
                'user_id' => $users[1],
                'tujuan_aduan' => 'Relocation and Marriage',
                'keterangan_aduan' => 'Advice on marriage adjustment after relocation.',
                'tarikh_konsultasi' => '2025-02-05',
                'paid_pilihan' => 'PAID Pekan',
                'kounselor_pilihan' => 'Perempuan',
            ],
            [
                'user_id' => $users[2],
                'tujuan_aduan' => 'Cultural Differences',
                'keterangan_aduan' => 'Counseling on overcoming cultural differences.',
                'tarikh_konsultasi' => '2025-02-07',
                'paid_pilihan' => 'PAID Kuantan',
                'kounselor_pilihan' => 'Lelaki',
            ],
            [
                'user_id' => $users[3],
                'tujuan_aduan' => 'Post-Divorce Support',
                'keterangan_aduan' => 'Help with adjusting to post-divorce life.',
                'tarikh_konsultasi' => '2025-02-09',
                'paid_pilihan' => 'PAID Pekan',
                'kounselor_pilihan' => 'Perempuan',
            ],
        ];

        // Insert consultation data into the database
        foreach ($consultations as $data) {
            Consultation::create($data);
        }
    }
}
