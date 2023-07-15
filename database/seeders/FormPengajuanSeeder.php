<?php

namespace Database\Seeders;

use App\Models\FormPengajuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FormPengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        FormPengajuan::factory(10)->create();
    }
}
