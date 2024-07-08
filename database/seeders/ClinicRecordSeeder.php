<?php

namespace Database\Seeders;

use App\Models\ClinicRecord;
use App\Models\Finding;
use Illuminate\Database\Seeder;

class ClinicRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $findings = Finding::factory(5)->create();

        ClinicRecord::factory(15)->hasAttached($findings)->create();
    }
}
