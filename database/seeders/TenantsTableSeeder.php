<?php

namespace Database\Seeders;

use App\Models\{
    Plan,
    Tenant
};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '11125339000130',
            'name' => 'WShare',
            'url' => 'wshare',
            'email' => 'wilquey@gmail.com',
        ]);
    }
}
