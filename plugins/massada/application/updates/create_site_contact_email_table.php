<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactEmailTable extends Migration
{

    public function up()
    {
        Schema::create('ms_siteContactEmail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->integer('site_contact_id')->unsigned()->index();
            $table->foreign('site_contact_id')->references('id')->on('ms_siteContact')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_siteContactEmail');
    }

}
