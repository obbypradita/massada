<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSitesTable extends Migration
{

    public function up()
    {
        Schema::create('ms_sites', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('owner');
            $table->string('address');
            $table->string('project_type');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('photo')->nullable();
            $table->integer('locations_id')->unsigned()->index();
            $table->foreign('locations_id')->references('id')->on('ms_locations')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_sites');
        //Schema::dropIfExists('massada_application_locations');

        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/original/*.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/avatar/*.png'));
   

    }

}
