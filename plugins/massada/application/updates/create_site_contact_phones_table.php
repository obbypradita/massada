<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteContactPhonesTable extends Migration
{

    public function up()
    {
        Schema::create('ms_siteContactPhones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone');
            $table->integer('site_contacts_id')->unsigned()->index();
            $table->foreign('site_contacts_id')->references('id')->on('ms_siteContacts')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_siteContactPhones');
    }

}
