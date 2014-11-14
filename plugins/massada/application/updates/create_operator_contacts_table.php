<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactsTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('operators_id')->unsigned();
            $table->foreign('operators_id')->references('id')->on('ms_operators')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContacts');
    }

}
