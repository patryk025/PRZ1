<?php

namespace Database\Seeders;

use App\Models\Tests;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\TestSuite;

class TestSeeder extends Seeder
{
    public function run()
    {
        Tests::factory()->count(10)->create();
    }
}
