<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
             'name' => 'Tandcontrole',
            'description' => 'Preventieve controle voor een gezond gebit.',
            'duration' => 30,
            'price' => 45.00,
        ]);

        Service::create([
          'name' => 'Gebitsreiniging',
          'description' => 'Een schoon en fris gebit.',
          'duration' => 45,
          'price' => 65.00,
        ]);

        Service::create([
            'name' => 'Tandvulling',
            'description' => 'Snelle en duurzame oplossing.',
            'duration' => 45,
            'price' => 75.00,
        ]);

        Service::create([
            'name' => 'Wortelkanaalbehandeling',
            'description' => 'Behandeling bij een ontstoken tand.',
            'duration' => 60,
            'price' => 150.00,
        ]);

        Service::create([
            'name' => 'Tanden bleken',
            'description' => 'Voor een wittere en stralende glimlach.',
            'duration' => 60,
            'price' => 120.00,
        ]);

        Service::create([
            'name' => 'Tandextractie',
            'description' => 'Veilige verwijdering van een tand.',
            'duration' => 30,
            'price' => 85.00,
        ]);


    }
}
