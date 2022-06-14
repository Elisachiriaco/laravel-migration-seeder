<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newTravel = new Travel();

            $newTravel->nome = $faker ->name();
            $newTravel->destinazione = $faker-> city();
            $newTravel->data_partenza = $faker->date();
            $newTravel->data_arrivo = $faker->date();
            $newTravel->notti = $faker->numberBetween(0,50);
            $newTravel->tipo_di_trattamento->words(3, true);
            $newTravel->prezzo_a_persona->randomFloat(2,50,9000);
            $newTravel->image = $faker->imageUrl(360,360,'travel',true);

            $newTravel->save();
        }
    }
}
