<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Italo', 'Trenitalia', 'FrecciaRossa', 'FrecciaArgento']);
            $new_train->departure_station = $faker->city(['Roma Termini', 'Milano Centrale', 'Torino Porta Nuova','Firenze Santa Maria Novella', 'Bologna Centrale', 'Roma Tiburtina', 'Napoli Centrale', 'Milano Cadorna', 'Venezia Mestre', 'Venezia Santa Lucia', 'Treviso Centrale', 'Preganziol', 'Mogliano Veneto']);
            $new_train->arrival_station = $faker->city(['Roma Termini', 'Milano Centrale', 'Torino Porta Nuova','Firenze Santa Maria Novella', 'Bologna Centrale', 'Roma Tiburtina', 'Napoli Centrale', 'Milano Cadorna', 'Venezia Mestre', 'Venezia Santa Lucia', 'Treviso Centrale', 'Preganziol', 'Mogliano Veneto']);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('######');
            $new_train->carriages_number = $faker->numberBetween(5, 10);
            $new_train->on_time = $faker->boolean();
            $new_train->on_time = $faker->boolean();
            $new_train->is_delete = $faker->boolean();
            //dump($new_train);
            $new_train->save();
        }
    }
}

dump($new_train);
