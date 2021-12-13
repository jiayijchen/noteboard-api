<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserNote::factory(5)->create();
    }
}
