<?php

namespace Database\Seeders;
use App\Models\participant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function ($user){
            participant::factory(rand(1, 3))->create([
                'user_id' => $user->id

            ]);


        });
    }
}
