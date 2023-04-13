<?php

namespace Database\Seeders;

use App\Models\Invoices;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        Invoices::factory()->count(10)->create();
    }
}