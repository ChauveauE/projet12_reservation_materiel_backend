<?php

use Illuminate\Database\Seeder;
use App\Materiels;

class MaterielsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materiels::create([
            'libelle'=>'craie rouge',
            'quantiteDispo'=>'5'
        ]);
        Materiels::create([
            'libelle'=>'feuille blanche',
            'quantiteDispo'=>'7'
        ]);
        Materiels::create([
            'libelle'=>'vidéo projecteur',
            'quantiteDispo'=>'3'
        ]);
    }
}
