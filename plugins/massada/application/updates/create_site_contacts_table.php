<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactsTable extends Migration
{

    public function up()
    {
        Schema::create('massada_application_site_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('sites_id')->unsigned();
            $table->foreign('sites_id')->references('id')->on('massada_application_sites')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('massada_application_site_contacts');
    }

}
