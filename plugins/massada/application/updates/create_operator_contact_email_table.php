<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactEmailTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContactEmail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->integer('operator_contact_id')->unsigned();;
            $table->foreign('operator_contact_id')->references('id')->on('ms_operatorContact')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactEmail');
    }

}
