<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactPhonesTable extends Migration
{

    public function up()
    {
        Schema::create('massada_application_site_contact_phones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone');
            $table->integer('site_contacts_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('massada_application_site_contact_phones');
    }

}
