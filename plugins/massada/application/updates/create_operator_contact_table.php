<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('operator_id')->unsigned();
            $table->foreign('operator_id')->references('id')->on('ms_operator')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContact');
    }

}
