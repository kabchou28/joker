<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activites')->insert([
            'label' => 'departement',
            'actif' => true,
        ]);
        DB::table('activites')->insert([
            'label' => 'departement_select',
            'actif' => true,
        ]);
        DB::table('activites')->insert([
            'label' => 'reunion',
            'actif' => true,
        ]);
        DB::table('activites')->insert([
            'label' => 'reunion_select',
            'actif' => true,
        ]);
        DB::table('activites')->insert([
            'label' => 'user',
            'actif' => true,
        ]);
        DB::table('activites')->insert([
            'label' => 'user_select',
            'actif' => true,
        ]);
    }
}
