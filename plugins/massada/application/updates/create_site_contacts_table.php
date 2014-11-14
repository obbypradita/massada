<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactsTable extends Migration
{

    public function up()
    {
        Schema::create('ms_siteContacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('sites_id')->unsigned()->index();
            $table->foreign('sites_id')->references('id')->on('ms_sites')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_siteContacts');
    }

}
