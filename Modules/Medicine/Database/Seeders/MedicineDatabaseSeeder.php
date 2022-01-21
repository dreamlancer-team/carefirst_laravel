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

        MedicineCategory::insert([
            'id' => 1,
            'name' => 'Tablet',
            'slug' => 'tablet',
            'user_id' => 1
        ]);
    }
}
