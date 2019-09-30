<?php

use Illuminate\Database\Seeder;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacations')->insert([
            'idPutovanja' => 1,
            'naziv' => 'Morroco, Marakech',
            'idLokacija' => 1,
            'cijena' => '350$',
            'datumPolazak' => '2019-08-01',
            'datumPovratak' => '2019-08-08',
            'raspolozivost' => 'Yes'
    ]);

        DB::table('vacation')->insert([
            'idPutovanja' => 2,
            'naziv' => 'Weekend trip to Paris',
            'idLokacija' => 2,
            'cijena' => 'From 109$',
            'datumPolazak' => '2019-08-24',
            'datumPovratak' => '2019-08-27',
            'raspolozivost' => 'Yes'
    ]);

        DB::table('vacation')->insert([
            'idPutovanja' => 3,
            'naziv' => 'The best of Eastern Europe',
            'idLokacija' => 3,
            'cijena' => '1200$',
            'datumPolazak' => '2019-10-01',
            'datumPovratak' => '2019-10-14',
            'raspolozivost' => 'Few reservations left!'
    ]);

         DB::table('vacation')->insert([
            'idPutovanja' => 4,
            'naziv' => 'Best of Italy',
            'idLokacija' => 4,
            'cijena' => 'From 189$',
            'datumPolazak' => '2019-09-15',
            'datumPovratak' => '2019-09-18',
            'raspolozivost' => 'Yes'
    ]);

        DB::table('vacation')->insert([
            'idPutovanja' => 5,
            'naziv' => 'England Explorer',
            'idLokacija' => 5,
            'cijena' => 'From 175$',
            'datumPolazak' => '2019-11-25',
            'datumPovratak' => '2019-11-28',
            'raspolozivost' => 'Yes'
    ]);
        
      DB::table('vacation')->insert([
            'idPutovanja' => 6,
            'naziv' => 'Pearls of Austria',
            'idLokacija' => 6,
            'cijena' => 'From 55$',
            'datumPolazak' => '2019-08-10',
            'datumPovratak' => '2019-08-11',
            'raspolozivost' => 'Yes'
    ]);
    }
}
