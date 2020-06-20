<?php

use Illuminate\Database\Seeder;
use App\Cagnolino;

class CagnolinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cagnolino::class,10) -> create();
    }
}
