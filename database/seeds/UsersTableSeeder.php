<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrateur',
            'email'=>'admin@admin.fr',
            'password'=>bcrypt('admin')
        ]);
        User::create([
            'name'=>'Dupond Dupont',
            'email'=>'dupond@dupont.fr',
            'password'=>bcrypt('DupontD')
        ]);
        User::create([
            'name'=>'Test',
            'email'=>'test@test.fr',
            'password'=>bcrypt('test')
        ]);
        User::create([
            'name'=>'Elodie Chauveau',
            'email'=>'elodie@chauveau.fr',
            'password'=>bcrypt('ChauveauE')
        ]);
    }
}
