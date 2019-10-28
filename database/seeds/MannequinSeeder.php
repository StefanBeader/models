<?php

use App\Models\Mannequin;
use Illuminate\Database\Seeder;

class MannequinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mannequin::class, 50)->create();
    }
}
