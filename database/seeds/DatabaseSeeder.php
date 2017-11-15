<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
          ['name' => 'Bazar'],
          ['name' => 'Comida'],
          ['name' => 'Electronicos']
        ]);
        $product = factory(App\Product::class)->times(50)->create();
    }
}
