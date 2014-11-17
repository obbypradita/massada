<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactTable extends Migration
{

    public function up()
    {
        Schema::create('ms_siteContact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('site_id')->unsigned()->index();
            $table->foreign('site_id')->references('id')->on('ms_site')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_siteContact');
    }

}
