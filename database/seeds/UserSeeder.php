<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 30)->create();
        factory(User::class, 3)->create()->each(function ($user) {
            $user->profile()->save(factory(App\Models\Profile::class)->make());
            $user->activities()->createMany(factory(App\Models\Activity::class, 2)->make()->toArray());
            $user->trainings()->createMany(factory(App\Models\Training::class, 2)->make()->toArray());
            $user->clubs()->createMany(factory(App\Models\Club::class, 2)->make()->toArray());
        });
    }
}
