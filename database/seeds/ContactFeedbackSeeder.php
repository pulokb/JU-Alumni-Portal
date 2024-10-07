<?php

use Illuminate\Database\Seeder;
use App\Models\ContactFeedback;

class ContactFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ContactFeedback::class,30)->create();
    }
}
