<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Urun;

class UrunTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();


        for ($i = 0; $i < 30; $i++) {
            $urun_adi = $faker->sentence(2);
            Urun::create([
                'urun_adi' => $urun_adi,
                'slug' => Str::slug($urun_adi),
                'aciklama' => $faker->sentence(5),
                'fiyati' => $faker->randomFloat(3, 1, 20),

            ]);

        }
    }
}
