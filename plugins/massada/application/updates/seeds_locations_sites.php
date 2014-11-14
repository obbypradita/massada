<?php namespace Massada\Application\Updates;

use October\Rain\Database\Updates\Seeder;
use Massada\Application\Models\Locations;
use Massada\Application\Models\Sites;
use Massada\Application\Models\SiteContacts;
use Massada\Application\Models\SiteContactEmails;
use Massada\Application\Models\SiteContactPhones;

class SeedsLocationsSites extends Seeder
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

            Sites::insert([
                  [
                        'name'           => 'Carrfour', 
                        'owner'          => 'PT. CARFOUR INDONESIA', 
                        'address'        => 'Jakarta 1', 
                        'project_type'   => 'Multi Oeprator', 
                        'phone'          => '02578945895458', 
                        'fax'            => '02578945895458', 
                        'photo'          => 'tidak ada',
                        'locations_id'   => '1'
                  ],

                  [
                        'name'            => 'Four Season', 
                        'owner'           => 'PT. FS INDONESIA', 
                        'address'         => 'Jakarta 2', 
                        'project_type'    => 'Multi Operator', 
                        'phone'           => 'Multi Operator', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'belum di upload',
                        'locations_id'   => '1'
                  ],

                  [
                        'name'            => 'Santika', 
                        'owner'           => 'PT. KOMPAS INDONESIA', 
                        'address'         => 'Jakarta 3', 
                        'project_type'    => 'Reseller', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'gagal di upload',
                        'locations_id'   => '1'
                  ],
            ]);

            
            Sites::insert([
                  [
                        'name'            => 'Adhijaya', 
                        'owner'           => 'Siapa saja boleh',
                        'address'         => 'Bali 1', 
                        'project_type'    => 'Multioperator', 
                        'phone'           => '02589789654789', 
                        'fax'             => '02578945895458', 
                        'photo'           => 'sedang di upload',
                        'locations_id'    => '2'
                  ],
            ]);






            SiteContacts::insert([
                  [ 'name'      => 'Stevan', 'sites_id' => '1'],
                  [ 'name'      => 'Aji'   , 'sites_id' => '1'],
                  [ 'name'      => 'Area'  , 'sites_id' => '1'],
            ]);

            SiteContacts::insert([
                  [ 'name'      => 'Obby'    , 'sites_id' => '2' ],
                  [ 'name'      => 'Pradita' , 'sites_id' => '2' ],
            ]);





            SiteContactPhones::insert([
                  [ 'phone' => '021589878654' , 'site_contacts_id' => '1' ],
            ]);

            SiteContactEmails::insert([
                  [ 'email' => 'stevan@gmail.com', 'site_contacts_id' => '1' ],
                  [ 'email' => 'stphan@gmail.com', 'site_contacts_id' => '1' ],
                  [ 'email' => 'steve@gmail.co'  , 'site_contacts_id' => '1' ],
            ]);





            SiteContactPhones::insert([
                  [ 'phone' => '021589878654'         , 'site_contacts_id' => '2' ],
                  [ 'phone' => '987569856548'         , 'site_contacts_id' => '2' ],
            ]);

            SiteContactEmails::insert([
                  [ 'email' => 'ajiesam@live.com'     , 'site_contacts_id' => '2' ],
            ]);



            SiteContactPhones::insert([
                  [ 'phone' => '029878548987', 'site_contacts_id' => '3' ],
            ]);
            SiteContactEmails::insert([
                  [ 'email' => 'areanoutik@plasa.com', 'site_contacts_id' => '3' ],
            ]);



            SiteContactPhones::insert([
                  [ 'phone' => '021589878654', 'site_contacts_id' => '4' ],
                  [ 'phone' => '867675678656', 'site_contacts_id' => '4' ],
                  [ 'phone' => '897678676575', 'site_contacts_id' => '4' ],
            ]);
            SiteContactEmails::insert([
                  [ 'email' => 'obie@gmail.com', 'site_contacts_id' => '4' ],
                  [ 'email' => 'oby@yahoo.com' , 'site_contacts_id' => '4' ],
            ]);



            SiteContactPhones::insert([
                  [ 'phone' => '021589878654'  , 'site_contacts_id' => '5' ],
            ]);
            SiteContactEmails::insert([
                  [ 'email' => 'prd@gmail.com' ,  'site_contacts_id' => '5' ],
                  [ 'email' => 'pra@gmail.com' ,  'site_contacts_id' => '5' ],
                  [ 'email' => 'dita@gmail.com', 'site_contacts_id' => '5' ],
            ]);
      

    }

}
