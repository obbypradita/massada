<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorContactEmailsTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operatorContactEmails', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->integer('operator_contacts_id')->unsigned();;
            $table->foreign('operator_contacts_id')->references('id')->on('ms_operatorContacts')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactEmails');
    }

}
