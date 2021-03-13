<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminMainInfo extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_main_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name_activity', 200);
            $table->string('desc', 500);
            $table->string('quote', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_main_info');
    }
}
