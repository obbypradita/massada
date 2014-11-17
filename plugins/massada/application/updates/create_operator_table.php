<?php namespace Massada\Application\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOperatorTable extends Migration
{

    public function up()
    {
        Schema::create('ms_operator', function($table)
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
        Schema::dropIfExists('ms_operatorContactPhone');
        Schema::dropIfExists('ms_operatorContactEmail');
        Schema::dropIfExists('ms_operatorContacts');
        Schema::dropIfExists('ms_operator');

        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/original/*.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/avatar/*.png'));
    }

}
