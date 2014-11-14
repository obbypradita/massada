<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Operators;
use Massada\Application\Models\OperatorContacts;
use Massada\Application\Models\OperatorContactEmails;
use Massada\Application\Models\OperatorContactPhones;

class SeedsOperators extends Seeder
{

      public function run()
      {

            Operators::insert([
                  [
                        'name'           => 'Telkomsel', 
                        'company'        => 'PT. CARFOUR INDONESIA', 
                        'address'        => 'Jakarta 1',  
                        'phone'          => '02578945895458', 
                        'fax'            => '02578945895458', 
                        'logo'           => 'tidak ada'
                  ],

                  [
                        'name'            => 'XL', 
                        'company'         => 'PT. FS INDONESIA', 
                        'address'         => 'Jakarta 2', 
                        'phone'           => '05468454568666', 
                        'fax'             => '02578945895458', 
                        'logo'            => 'belum di upload'
                  ],

                  [
                        'name'            => 'Santika', 
                        'company'         => 'PT. KOMPAS INDONESIA', 
                        'address'         => 'Jakarta 3', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'logo'            => 'gagal di upload'
                  ],

                  [
                        'name'            => 'Adhijaya', 
                        'company'         => 'Siapa saja boleh',
                        'address'         => 'Bali 1',  
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'logo'            => 'sedang di upload'
                  ],
            ]);

            $contacts1 = Operators::whereId('1')->first();
            $contacts1->contacts()->createMany([
                  [ 'name'      => 'Stevan' ],
                  [ 'name'      => 'Aji' ],
                  [ 'name'      => 'Area' ],
            ]);

            $contacts2 = Operators::whereId('2')->first();
            $contacts2->contacts()->createMany([
                  [ 'name'      => 'Obby' ],
                  [ 'name'      => 'Pradita' ],
            ]);

            $pe1 = OperatorContacts::whereId('1')->first();
            $pe1->phones()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe1->emails()->createMany([
                  [ 'email' => 'stevan@gmail.com' ],
                  [ 'email' => 'stphan@gmail.com' ],
                  [ 'email' => 'steve@gmail.co' ],
            ]);

            $pe2 = OperatorContacts::whereId('2')->first();
            $pe2->phones()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '987569856548' ],
            ]);
            $pe2->emails()->createMany([
                  [ 'email' => 'ajiesam@live.com' ],
            ]);

            $pe3 = OperatorContacts::whereId('3')->first();
            $pe3->phones()->createMany([
                  [ 'phone' => '029878548987' ],
            ]);
            $pe3->emails()->createMany([
                  [ 'email' => 'areanoutik@plasa.com' ],
            ]);

            $pe4 = OperatorContacts::whereId('4')->first();
            $pe4->phones()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '867675678656' ],
                  [ 'phone' => '897678676575' ],
            ]);
            $pe4->emails()->createMany([
                  [ 'email' => 'obie@gmail.com' ],
                  [ 'email' => 'oby@yahoo.com' ],
            ]);

            $pe5 = OperatorContacts::whereId('5')->first();
            $pe5->phones()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe5->emails()->createMany([
                  [ 'email' => 'prd@gmail.com' ],
                  [ 'email' => 'pra@gmail.com' ],
                  [ 'email' => 'dita@gmail.com' ],
            ]);
      

    }

}
