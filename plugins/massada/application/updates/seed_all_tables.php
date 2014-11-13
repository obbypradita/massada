<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Locations;
use Massada\Application\Models\Sites;
use Massada\Application\Models\SiteContacts;
use Massada\Application\Models\SiteContactEmails;
use Massada\Application\Models\SiteContactPhones;

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
                        'owner'           => 'Siapa saja boleh',
                        'address'         => 'Bali 1', 
                        'project_type'    => 'Multioperator', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'sedang di upload'
                  ],
            ]);

            $contacts1 = Sites::whereId('1')->first();
            $contacts1->sitecontacts()->createMany([
                  [ 'name'      => 'Stevan' ],
                  [ 'name'      => 'Aji' ],
                  [ 'name'      => 'Area' ],
            ]);

            $contacts2 = Sites::whereId('2')->first();
            $contacts2->sitecontacts()->createMany([
                  [ 'name'      => 'Obby' ],
                  [ 'name'      => 'Pradita' ],
            ]);

            $pe1 = SiteContacts::whereId('1')->first();
            $pe1->sitecontactphones()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe1->sitecontactemails()->createMany([
                  [ 'email' => 'stevan@gmail.com' ],
                  [ 'email' => 'stphan@gmail.com' ],
                  [ 'email' => 'steve@gmail.co' ],
            ]);

            $pe2 = SiteContacts::whereId('2')->first();
            $pe2->sitecontactphones()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '987569856548' ],
            ]);
            $pe2->sitecontactemails()->createMany([
                  [ 'email' => 'ajiesam@live.com' ],
            ]);

            $pe3 = SiteContacts::whereId('3')->first();
            $pe3->sitecontactphones()->createMany([
                  [ 'phone' => '029878548987' ],
            ]);
            $pe3->sitecontactemails()->createMany([
                  [ 'email' => 'areanoutik@plasa.com' ],
            ]);

            $pe4 = SiteContacts::whereId('4')->first();
            $pe4->sitecontactphones()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '867675678656' ],
                  [ 'phone' => '897678676575' ],
            ]);
            $pe4->sitecontactemails()->createMany([
                  [ 'email' => 'obie@gmail.com' ],
                  [ 'email' => 'oby@yahoo.com' ],
            ]);

            $pe5 = SiteContacts::whereId('5')->first();
            $pe5->sitecontactphones()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe5->sitecontactemails()->createMany([
                  [ 'email' => 'prd@gmail.com' ],
                  [ 'email' => 'pra@gmail.com' ],
                  [ 'email' => 'dita@gmail.com' ],
            ]);
      

    }

}
