<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\MergingSlugUser;
use App\Models\PersonalData;
use App\Models\SosialMedia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = Str::random(10) . uniqid();
        MergingSlugUser::insert([
            'user_id' => 1,
            'slug' => $slug
        ]);

        PersonalData::insert([
            'user_id' => 1
        ]);

        SosialMedia::insert([
            'user_id' => 1
        ]);

        CV::insert([
            'user_id' => 1
        ]);
    }
}