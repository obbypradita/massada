<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactPhonesTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContactPhones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone');
            $table->integer('operator_contacts_id')->unsigned();;
            $table->foreign('operator_contacts_id')->references('id')->on('ms_operatorContacts')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactPhones');
    }

}
