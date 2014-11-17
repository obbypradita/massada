<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Location;
use Massada\Application\Models\Site;
use Massada\Application\Models\SiteContact;
use Massada\Application\Models\SiteContactEmail;
use Massada\Application\Models\SiteContactPhone;

class SeedsLocationsSite extends Seeder
{

      public function run()
      {
            Location::insert([
                  ['name' => 'Jakarta'],
                  ['name' => 'Bali'],
                  ['name' => 'Bandung'],
                  ['name' => 'Tangrang'],
                  ['name' => 'Bogor'],
                  ['name' => 'Manado'],
                  ['name' => 'Lombok'],
                  ['name' => 'Semarang'],
            ]);

            Site::insert([
                  [
                        'name'           => 'Carrfour', 
                        'owner'          => 'PT. CARFOUR INDONESIA', 
                        'address'        => 'Jakarta 1', 
                        'project_type'   => 'Multi Oeprator', 
                        'phone'          => '02578945895458', 
                        'fax'            => '02578945895458', 
                        'photo'          => 'tidak ada',
                        'location_id'   => '1'
                  ],

                  [
                        'name'            => 'Four Season', 
                        'owner'           => 'PT. FS INDONESIA', 
                        'address'         => 'Jakarta 2', 
                        'project_type'    => 'Multi Operator', 
                        'phone'           => 'Multi Operator', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'belum di upload',
                        'location_id'   => '1'
                  ],

                  [
                        'name'            => 'Santika', 
                        'owner'           => 'PT. KOMPAS INDONESIA', 
                        'address'         => 'Jakarta 3', 
                        'project_type'    => 'Reseller', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'gagal di upload',
                        'location_id'   => '1'
                  ],
            ]);

            
            Site::insert([
                  [
                        'name'            => 'Adhijaya', 
                        'owner'           => 'Siapa saja boleh',
                        'address'         => 'Bali 1', 
                        'project_type'    => 'Multioperator', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'sedang di upload',
                        'location_id'    => '2'
                  ],
            ]);






            SiteContact::insert([
                  [ 'name'      => 'Stevan', 'site_id' => '1'],
                  [ 'name'      => 'Aji'   , 'site_id' => '1'],
                  [ 'name'      => 'Area'  , 'site_id' => '1'],
            ]);

            SiteContact::insert([
                  [ 'name'      => 'Obby'    , 'site_id' => '2' ],
                  [ 'name'      => 'Pradita' , 'site_id' => '2' ],
            ]);





            SiteContactPhone::insert([
                  [ 'phone' => '021589878654' , 'site_contact_id' => '1' ],
            ]);

            SiteContactEmail::insert([
                  [ 'email' => 'stevan@gmail.com', 'site_contact_id' => '1' ],
                  [ 'email' => 'stphan@gmail.com', 'site_contact_id' => '1' ],
                  [ 'email' => 'steve@gmail.co'  , 'site_contact_id' => '1' ],
            ]);





            SiteContactPhone::insert([
                  [ 'phone' => '021589878654'         , 'site_contact_id' => '2' ],
                  [ 'phone' => '987569856548'         , 'site_contact_id' => '2' ],
            ]);

            SiteContactEmail::insert([
                  [ 'email' => 'ajiesam@live.com'     , 'site_contact_id' => '2' ],
            ]);



            SiteContactPhone::insert([
                  [ 'phone' => '029878548987', 'site_contact_id' => '3' ],
            ]);
            SiteContactEmail::insert([
                  [ 'email' => 'areanoutik@plasa.com', 'site_contact_id' => '3' ],
            ]);



            SiteContactPhone::insert([
                  [ 'phone' => '021589878654', 'site_contact_id' => '4' ],
                  [ 'phone' => '867675678656', 'site_contact_id' => '4' ],
                  [ 'phone' => '897678676575', 'site_contact_id' => '4' ],
            ]);
            SiteContactEmail::insert([
                  [ 'email' => 'obie@gmail.com', 'site_contact_id' => '4' ],
                  [ 'email' => 'oby@yahoo.com' , 'site_contact_id' => '4' ],
            ]);



            SiteContactPhone::insert([
                  [ 'phone' => '021589878654'  , 'site_contact_id' => '5' ],
            ]);
            SiteContactEmail::insert([
                  [ 'email' => 'prd@gmail.com' ,  'site_contact_id' => '5' ],
                  [ 'email' => 'pra@gmail.com' ,  'site_contact_id' => '5' ],
                  [ 'email' => 'dita@gmail.com', 'site_contact_id' => '5' ],
            ]);
      

    }

}
