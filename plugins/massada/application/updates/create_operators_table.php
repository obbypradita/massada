<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorsTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operators', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('address');
            $table->string('phone');
            $table->string('fax');
            $table->string('logo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_operatorContactPhones');
        Schema::dropIfExists('ms_operatorContactEmails');
        Schema::dropIfExists('ms_operatorContacts');
        Schema::dropIfExists('ms_operators');

        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/original/*.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/avatar/*.png'));
    }

}
