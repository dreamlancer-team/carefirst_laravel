<?php

namespace Modules\Medicine\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Medicine\Entities\MedicineCategory;

class MedicineDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i = 2; $i < 10000; $i++) {
            MedicineCategory::create([
                'id' => $i,
                'name' => 'Tablet ' . $i,
                'user_id' => 1
            ]);
        }
    }
}
