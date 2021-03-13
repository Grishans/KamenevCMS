<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminTypeServices extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_type_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
            $table->string('slug', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_type_services');
    }
}
