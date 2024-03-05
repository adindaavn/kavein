<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'hanni',
                'email' => 'hanni@manis.bgt',
                'password' => bcrypt('hannibani'),
            ],
            [
                'name' => 'minjeong',
                'email' => 'winter@kim.com',
                'password' => bcrypt('kimminsik'),
            ],
            [
                'name' => 'shinyu',
                'email' => 'shin@like.yu',
                'password' => bcrypt('gantengamat'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
