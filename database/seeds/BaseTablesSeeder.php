<?php

use Illuminate\Database\Seeder;

class BaseTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villages')->insert([
           'name' => 'Подобовец',
           'description' => 'I\'m awesome',
       ]);

       DB::table('hotels')->insert([
           'name' => 'Сказка Карпат',
           'host' => 'Василь',
           'village_id' => 1,
           'description' => str_random(100),
       ],
       [
           'name' => 'Под Гимбой',
           'host' => 'Оксана',
           'village_id' => 1,
           'description' => str_random(100),
       ],
       [
           'name' => 'Под Веселим Дахом',
           'host' => 'Марина',
           'village_id' => 1,
           'description' => str_random(100),
       ]);


       DB::table('apartments')->insert([
           'description' => str_random(50),
           'status' => 1,
           'hotel_id' => 1,
       ],
       [
           'description' => str_random(50),
           'status' => 2,
           'hotel_id' => 1,
       ],
       [
           'description' => str_random(50),
           'status' => 2,
           'hotel_id' => 2,
       ]);


       DB::table('users')->insert([
           'name' => 'Geo',
           'email' => 'georesty@gmail.com',
           'password' => bcrypt('secret'),
       ]);

       DB::table('customers')->insert([
           'name' => str_random(10),
           'surname' => str_random(10),
           'email' => str_random(10).'@gmail.com',
           'phone' => str_random('secret'),
       ]);

       DB::table('customers_to_apartments')->insert([
           'customer_id' => 1,
           'apartment_id' => 1,
       ]);
    }
}
