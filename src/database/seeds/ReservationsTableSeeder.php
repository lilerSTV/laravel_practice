<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Reservation::class, 100)->create();
        $this->call(ReservationsTableSeeder::class);

    }
}
