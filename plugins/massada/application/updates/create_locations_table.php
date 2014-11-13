<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('massada_application_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('massada_application_site_contact_emails');
        Schema::dropIfExists('massada_application_site_contact_phones');
        Schema::dropIfExists('massada_application_site_contacts');
        Schema::dropIfExists('massada_application_sites');
        Schema::dropIfExists('massada_application_locations');
    }

}
