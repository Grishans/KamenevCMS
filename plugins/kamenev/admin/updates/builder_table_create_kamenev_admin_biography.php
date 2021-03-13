<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminBiography extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_biography', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 200);
            $table->string('desc', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_biography');
    }
}
