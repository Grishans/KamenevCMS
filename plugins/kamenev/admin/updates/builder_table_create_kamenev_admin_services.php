<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminServices extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('type_service_id');
            $table->string('desc', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_services');
    }
}
