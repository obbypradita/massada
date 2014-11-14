<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('ms_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_siteContactEmails');
        Schema::dropIfExists('ms_siteContactPhones');
        Schema::dropIfExists('ms_siteContacts');
        Schema::dropIfExists('ms_sites');
        Schema::dropIfExists('ms_locations');
    }

}
