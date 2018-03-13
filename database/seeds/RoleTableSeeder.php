<?php

use Illuminate\Database\Seeder;
use DB;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'libelle' => 'barman',
        ]);
        DB::table('roles')->insert([
            'libelle' => 'receptionnist',
        ]);
        DB::table('roles')->insert([
            'libelle' => 'cuisinier',
        ]);
        DB::table('roles')->insert([
            'libelle' => 'hebergeur',
        ]);
    }
}
