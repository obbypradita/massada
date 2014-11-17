<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationTable extends Migration
{

    public function up()
    {
        Schema::create('ms_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactEmails');
        Schema::dropIfExists('ms_operatorContactPhones');
        Schema::dropIfExists('ms_operatorContacts');
        Schema::dropIfExists('ms_operators');
        Schema::dropIfExists('ms_siteContactEmails');
        Schema::dropIfExists('ms_siteContactPhones');
        Schema::dropIfExists('ms_siteContacts');
        Schema::dropIfExists('ms_sites');
        Schema::dropIfExists('ms_locations');

        Schema::dropIfExists('ms_siteContactEmail');
        Schema::dropIfExists('ms_siteContactPhone');
        Schema::dropIfExists('ms_siteContact');
        Schema::dropIfExists('ms_site');
        Schema::dropIfExists('ms_location');
    }

}
