<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Locations;
use Massada\Application\Models\Sites;

class SeedAllTables extends Seeder
{

      public function run()
      {
            Locations::insert([
                  ['name' => 'Jakarta'],
                  ['name' => 'Bali'],
                  ['name' => 'Bandung'],
                  ['name' => 'Tangrang'],
                  ['name' => 'Bogor'],
                  ['name' => 'Manado'],
                  ['name' => 'Lombok'],
                  ['name' => 'Semarang'],
            ]);

            $jk = Locations::whereId('1')->first();
            $jk->sites()->createMany([
                  [
                        'name'           => 'Carrfour', 
                        'owner'          => 'PT. CARFOUR INDONESIA', 
                        'address'        => 'Jakarta 1', 
                        'project_type'   => 'Multi Oeprator', 
                        'phone'          => '02578945895458', 
                        'fax'            => '02578945895458', 
                        'photo'          => 'tidak ada'
                  ],

                  [
                        'name'            => 'Four Season', 
                        'owner'           => 'PT. FS INDONESIA', 
                        'address'         => 'Jakarta 2', 
                        'project_type'    => 'Multi Operator', 
                        'phone'           => 'Multi Operator', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'belum di upload'
                  ],

                  [
                        'name'            => 'Santika', 
                        'owner'           => 'PT. KOMPAS INDONESIA', 
                        'address'         => 'Jakarta 3', 
                        'project_type'    => 'Reseller', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'gagal di upload'
                  ],
            ]);

            
            $bl = Locations::whereId('2')->first();
            $bl->sites()->createMany([
                  [
                        'name'            => 'Adhijaya', 
                        'address'         => 'Bali 1', 
                        'project_type'    => 'Multioperator', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'sedang di upload'
                  ],
                  ]);
      

    }

}
