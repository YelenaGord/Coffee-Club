<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('coffees')->insert([
            'name'  => 'Suplicar Clemencia Dark',
            'roast' => 'dark',
            'desc'   => 'We take a specially selected blend of beans and roast them until they beg for mercy. A roasty, chocolaty, full bodied and honey-sweet dark roast.',
            'country' => 'Not available',
            'image' => str_random(10)
        ]);

        DB::table('coffees')->insert([
            'name'  => 'Sumatra Dark',
            'roast' => 'dark',
            'desc'   => 'We take a dark blend of arabica coffee beans and roast them just right for the bold dark roast taste.',
            'country' => 'South America',
            'image' => str_random(10)
        ]);

    }
}
