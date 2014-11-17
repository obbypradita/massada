<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Operator;
use Massada\Application\Models\OperatorContact;
use Massada\Application\Models\OperatorContactEmail;
use Massada\Application\Models\OperatorContactPhone;

class SeedsOperator extends Seeder
{

      public function run()
      {

            Operator::insert([
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

            $contact1 = Operator::whereId('1')->first();
            $contact1->contact()->createMany([
                  [ 'name'      => 'Stevan' ],
                  [ 'name'      => 'Aji' ],
                  [ 'name'      => 'Area' ],
            ]);

            $contact2 = Operator::whereId('2')->first();
            $contact2->contact()->createMany([
                  [ 'name'      => 'Obby' ],
                  [ 'name'      => 'Pradita' ],
            ]);

            $pe1 = OperatorContact::whereId('1')->first();
            $pe1->phone()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe1->email()->createMany([
                  [ 'email' => 'stevan@gmail.com' ],
                  [ 'email' => 'stphan@gmail.com' ],
                  [ 'email' => 'steve@gmail.co' ],
            ]);

            $pe2 = OperatorContact::whereId('2')->first();
            $pe2->phone()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '987569856548' ],
            ]);
            $pe2->email()->createMany([
                  [ 'email' => 'ajiesam@live.com' ],
            ]);

            $pe3 = OperatorContact::whereId('3')->first();
            $pe3->phone()->createMany([
                  [ 'phone' => '029878548987' ],
            ]);
            $pe3->email()->createMany([
                  [ 'email' => 'areanoutik@plasa.com' ],
            ]);

            $pe4 = OperatorContact::whereId('4')->first();
            $pe4->phone()->createMany([
                  [ 'phone' => '021589878654' ],
                  [ 'phone' => '867675678656' ],
                  [ 'phone' => '897678676575' ],
            ]);
            $pe4->email()->createMany([
                  [ 'email' => 'obie@gmail.com' ],
                  [ 'email' => 'oby@yahoo.com' ],
            ]);

            $pe5 = OperatorContact::whereId('5')->first();
            $pe5->phone()->createMany([
                  [ 'phone' => '021589878654' ],
            ]);
            $pe5->email()->createMany([
                  [ 'email' => 'prd@gmail.com' ],
                  [ 'email' => 'pra@gmail.com' ],
                  [ 'email' => 'dita@gmail.com' ],
            ]);
      

    }

}
