<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactPhoneTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContactPhone', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone');
            $table->integer('operator_contact_id')->unsigned();;
            $table->foreign('operator_contact_id')->references('id')->on('ms_operatorContact')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactPhone');
    }

}
